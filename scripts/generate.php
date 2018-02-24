<?php
require(dirname(__FILE__) . '/../vendor/autoload.php');
error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE & ~E_DEPRECATED);

use PhpParser\NodeTraverser;
use PhpParser\Comment;
use PhpParser\NodeVisitorAbstract;
use PhpParser\PrettyPrinter;
use PhpParser\ParserFactory;
use PhpParser\Node;
use PhpParser\Node\Stmt;
use Colors\Color;
use Scripts\MWSCodeTransform\ClassNameCollectorTransformer;

define('BASE_PATH', realpath(dirname(__FILE__) . '/..'));

$C = new Color();

function base_path($dir)
{
    return BASE_PATH . "$dir";
}

function files($dir)
{
    return array_diff(scandir($dir), ['.', '..']);
}

function pad($n)
{
    return str_repeat("  ", $n);
}

$class_name_transformer = new ClassNameCollectorTransformer();

$root_base = base_path('/amazon-srcs/src');
$output_base = base_path('/src/Vhqtvn/AmazonMWS/Services');
passthru("rm -rf " . rtrim(escapeshellarg($output_base), "/") . "/*");
foreach (files($root_base) as $lib) {
    handle_lib($lib, "$root_base/$lib", "$output_base/$lib");
}

function handle_lib($name, $src_folder, $dst_folder)
{
    @mkdir("$dst_folder");
    handle_dir(0, $name, $src_folder, $dst_folder, $name, ["Vhqtvn", "AmazonMWS", "Services", $name], ["Vhqtvn", "AmazonMWS", "Services"]);
}

function handle_dir($depth, $lib_name, $src_dir, $dst_dir, $src_ns, $dst_ns, $base_ns)
{
    global $C;
    foreach (files($src_dir) as $file) {
        $src_path = "$src_dir/$file";
        $target_path = "$dst_dir/$file";
        if (is_file($src_path)) {
            if (substr($src_path, -4) == ".php") {
                echo $C(pad($depth) . "$file")->red . "\n";
                handle_php($depth, $lib_name, $src_path, $target_path, $src_ns, $dst_ns, $base_ns);
            } else {
                echo $C(pad($depth) . "$file")->white;
                if (!copy($src_path, $target_path)) {
                    die("Error");
                } else {
                    echo $C(" -> copied")->green->bold;
                }
                echo "\n";
            }
        } else {
            if ($file === "Samples") continue;
            @mkdir($target_path);
            echo $C(pad($depth) . "$file")->blue . PHP_EOL;
            handle_dir($depth + 1, $lib_name, $src_path, $target_path, "$src_ns\\$file", array_merge($dst_ns, [$file]), $base_ns);
        }
    }
}

/**
 * @param $depth
 * @param $lib_name
 * @param $src_path
 * @param $dst_path
 * @param $src_ns
 * @param $dst_ns
 * @return mixed
 */
function handle_php($depth, $lib_name, $src_path, $dst_path, $src_ns, $dst_ns, $base_ns)
{
    if (substr($src_path, -9) === "Model.php") {
        generate_from_global_base($depth, "Vhqtvn\\AmazonMWS\\AmazonMWSModel", $lib_name, $src_path, $dst_path, $src_ns, $dst_ns, $base_ns);
    } else if (substr($src_path, -13) === "Exception.php") {
        generate_from_global_base($depth, "Vhqtvn\\AmazonMWS\\AmazonMWSException", $lib_name, $src_path, $dst_path, $src_ns, $dst_ns, $base_ns);
    } else {
        generate_using_ast($depth, $lib_name, $src_path, $dst_path, $src_ns, $dst_ns, $base_ns);
    }
}

function generate_from_global_base($depth, $global_base, $lib_name, $src_path, $dst_path, $src_ns, $dst_ns, $base_ns)
{
    global $class_name_transformer;

    $code = file_get_contents($src_path);

    $parser = (new ParserFactory)->create(ParserFactory::PREFER_PHP7);
    $ast = $parser->parse($code);

    $class_name_transformer->setCallback(function (string $ident) use ($lib_name, $base_ns) {
        if (strpos($ident, $lib_name) === 0) {
            return name_transform($ident, $lib_name, $base_ns);
        }
        return $ident;
    });

    $traverser = new NodeTraverser();
    $traverser->addVisitor($class_name_transformer);
    $traverser->addVisitor(new class($global_base) extends NodeVisitorAbstract
    {
        private $global_base;

        public function __construct($global_base)
        {
            $this->global_base = $global_base;
        }

        public function enterNode(Node $node)
        {
            if ($node instanceof Stmt\Class_) {
                $node->extends = new Node\Name(basename(strtr($this->global_base, "\\", "/")));
                $node->stmts = [];
            }
        }
    });
    $ast = $traverser->traverse($ast);

    array_splice($ast, 0, 0, [
        new Stmt\Namespace_(
            new Node\Name($dst_ns)
        ),
        new Stmt\Use_(
            [new Stmt\UseUse(
                new Node\Name($global_base)
            )]
        )
    ]);

    $prettyPrinter = new PrettyPrinter\Standard(['shortArraySyntax' => true]);
    $new_code = $prettyPrinter->prettyPrintFile($ast);
//    $dumper = new NodeDumper;
//    echo $dumper->dump($ast) . "\n";
    $new_code = final_text_transform($new_code, $lib_name, $dst_ns, $base_ns);

    file_put_contents(make_dst_path($dst_path, $class_name_transformer->lastDeclaredClassName()), $new_code);
}

function generate_using_ast($depth, $lib_name, $src_path, $dst_path, $src_ns, $dst_ns, $base_ns)
{
    global $class_name_transformer;
    $pad = pad($depth);
    $code = file_get_contents($src_path);

    $parser = (new ParserFactory)->create(ParserFactory::PREFER_PHP7);
    $ast = $parser->parse($code);

    $traverser = new NodeTraverser();
    $traverser->addVisitor(new class extends NodeVisitorAbstract
    {
        public function leaveNode(Node $node)
        {
            if ($node instanceof Node\Expr\Include_) {
                if ($node->type === Node\Expr\Include_::TYPE_REQUIRE_ONCE) {
                    return NodeTraverser::REMOVE_NODE;
                }
            }
        }
    });
    $ast = $traverser->traverse($ast);

    $class_name_transformer->newPendingImportContext();
    $class_name_transformer->setCallback(function (string $ident) use (&$pending_imports, $lib_name, $dst_ns, $base_ns) {
        if (strpos($ident, $lib_name) === 0) {
            $new_name = name_transform($ident, $lib_name, $base_ns);
            return $new_name;
        }
        return special_name_transform($ident);
    });
    $traverser = new NodeTraverser();
    $traverser->addVisitor($class_name_transformer);
    $ast = $traverser->traverse($ast);

    array_unshift($ast,
        new Stmt\Namespace_(
            new Node\Name($dst_ns)
        ),
        ...array_map(function ($name) use ($lib_name) {
            return new Stmt\Use_([new Stmt\UseUse(new Node\Name($name))]);
        }, array_values($class_name_transformer->getAndClearPendingImports())));

    $prettyPrinter = new PrettyPrinter\Standard(['shortArraySyntax' => true]);
    $new_code = $prettyPrinter->prettyPrintFile($ast);
//    $dumper = new NodeDumper;
//    echo $dumper->dump($ast) . "\n";

    $new_code = final_text_transform($new_code, $lib_name, $dst_ns, $base_ns);

    file_put_contents(make_dst_path($dst_path, $class_name_transformer->lastDeclaredClassName()), $new_code);

//    var_dump($class_name_transformer->getChanges());
//    exit;
}

function name_transform($ident, $lib_name, $base_ns)
{
    if (strpos($ident, $lib_name) !== 0) return false;

    $parts = explode("_", $ident);

    assert(count($parts) >= 2);
    assert($parts[0] == $base_ns[count($base_ns) - 1]);

    $prefix = implode("_", array_slice($parts, 0, count($parts) - 1));

    $prefix = str_replace("FBA", "FBA_", $prefix);
    $prefix = str_replace("MWS", "MWS_", $prefix);
    $prefix = str_replace("MarketPlaceWebService", "MWS_", $prefix);

    $prefix = preg_replace('@([^A-Z])([A-Z])@', '$1_$2', $prefix);
    $prefix = preg_replace('@[^A-Za-z_]+@', '', $prefix);
    $prefix = str_replace("_", "", ucwords(strtolower($prefix), "_"));
    $parts[count($parts) - 1] = $prefix . $parts[count($parts) - 1];

    return implode("\\", array_merge($base_ns, $parts));
}

function special_name_transform($name)
{
    if (in_array($name, ["Exception", "InvalidArgumentException", "DOMDocument", "DOMXPath"])) {
        return "__vh_dummy_root__$name";
    }
    return $name;
}

function final_text_transform($code, $lib_name, $dst_ns, $base_ns)
{
    // move license block to the top
    if (preg_match_all('@^/\*.*?\*/\n@ism', $code, $m)) {
        foreach ($m[0] as $comment_block) {
            if (strpos($comment_block, "Licensed under the") !== false) {
                $code = str_replace($comment_block, '', $code);
                $code = str_replace("<?php\n", "<?php\n$comment_block", $code);
                break;
            }
        }
    }

    // dummy root

    $code = str_replace('__vh_dummy_root__', '\\', $code);

    // model typing

    $code = preg_replace_callback("@'FieldType' => array\('([^']+)'\)@", function ($m) use ($lib_name, $base_ns) {
        $transformed = name_transform($m[1], $lib_name, $base_ns);
        if ($transformed) {
            return "'FieldType' => array(\\" . name_transform($m[1], $lib_name, $base_ns) . "::class)";
        } else {
            return $m[0];
        }
    }, $code);

    $code = preg_replace_callback("@'FieldType' => '([^']+)'@", function ($m) use ($lib_name, $base_ns) {
        $transformed = name_transform($m[1], $lib_name, $base_ns);
        if ($transformed) {
            return "'FieldType' => \\" . name_transform($m[1], $lib_name, $base_ns) . "::class";
        } else {
            return $m[0];
        }
    }, $code);

    // replace class within docblock
    $parser = (new ParserFactory)->create(ParserFactory::PREFER_PHP7);
    $ast = $parser->parse($code);

    $traverser = new NodeTraverser();
    $traverser->addVisitor(new class($lib_name, $dst_ns, $base_ns) extends NodeVisitorAbstract
    {
        private $lib_name;
        private $dst_ns;
        private $base_ns;

        function __construct($lib_name, $dst_ns, $base_ns)
        {
            $this->lib_name = $lib_name;
            $this->dst_ns = $dst_ns;
            $this->base_ns = $base_ns;
        }

        public function leaveNode(Node $node)
        {
            $doc_comment = $node->getDocComment();
            if ($doc_comment) {
                $doc_text = $doc_comment->getText();
                if ($doc_text) {
                    $doc_text_new = preg_replace_callback(
                        '@\b' . preg_quote($this->lib_name) . '_[0-9a-zA-Z_]+\b@',
                        function ($m) {
                            return "\\" . name_transform($m[0], $this->lib_name, $this->base_ns);
                        },
                        $doc_text
                    );
                    $doc_text_new = preg_replace_callback(
                        '@\bList<([0-9a-zA-Z_]+)>@',
                        function ($m) {
                            $class = $m[1];
                            assert(strpos($class, '_') === false);
                            $old_name = array_slice($this->dst_ns, count($this->base_ns));
                            $old_name[] = $class;
                            $old_name = implode("_", $old_name);
                            return "\\" . name_transform($old_name, $this->lib_name, $this->base_ns) . '[]';
                        },
                        $doc_text_new
                    );
                    $doc_text_new = preg_replace_callback(
                        '/@return ([0-9a-zA-Z]+)(\s)/',
                        function ($m) {
                            $class = $m[1];
                            assert(strpos($class, '_') === false);
                            $old_name = array_slice($this->dst_ns, count($this->base_ns));
//                            var_dump(base_path('/amazon-srcs/src/' . implode('/', $old_name) . "/$class.php"));exit;
                            if (!file_exists(base_path('/amazon-srcs/src/' . implode('/', $old_name) . "/$class.php"))) {
                                return $m[0];
                            }
                            $old_name[] = $class;
                            $old_name = implode("_", $old_name);
                            $new_name = "\\" . name_transform($old_name, $this->lib_name, $this->base_ns);
                            return "@return $new_name{$m[2]}";
                        },
                        $doc_text_new
                    );
                    $doc_text_new = str_ireplace('@return this instance', '@return $this ', $doc_text_new);
                    if ($node instanceof Stmt\Class_) {
                        if (preg_match($pattern =
                            '@ \* Properties:\n'
                            . ' \* <ul>\n'
                            . ' \* *\n'
                            . '( \* <li>.*?</li>\n)*'
                            . ' \* *\n'
                            . ' \* </ul>'
                            . '@ism'
                            , $doc_text_new
                        )) {
                            $doc_text_new = preg_replace_callback($pattern, function ($m) {
                                $doc_block = $m[0];
                                unset($m);
                                preg_match_all('@<li>(.*?)</li>@ism', $doc_block, $m);
                                $props = [];
                                foreach ($m[1] as $prop_line) {
                                    if (!preg_match('@[0-9a-zA-Z_]+: [0-9a-zA-Z_\\\\]+@ism', $prop_line)) {
                                        die("Invalid prop line $prop_line");
                                    }
                                    list($name, $type) = array_map('trim', explode(":", $prop_line));
                                    $props[] = ['name' => $name, 'type' => $type];
                                }
                                return implode("\n", array_map(function ($prop) {
                                    return " * @property\t{$prop['type']}\t\${$prop['name']}";
                                }, $props));
                            }, $doc_text_new);
                        }
                    }
                    if ($doc_text_new !== $doc_text) {
                        $node->setDocComment(new PhpParser\Comment\Doc(
                            $doc_text_new,
                            $doc_comment->getLine(),
                            $doc_comment->getFilePos()
                        ));
                    }
                }
            }
        }
    });
    $ast = $traverser->traverse($ast);

    $prettyPrinter = new PrettyPrinter\Standard(['shortArraySyntax' => true]);
    $code = $prettyPrinter->prettyPrintFile($ast);

    return $code;
}

function make_dst_path($path, $new_name)
{
    $dir = dirname($path);
    return "$dir/$new_name.php";
}