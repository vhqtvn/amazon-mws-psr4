<?php

define('BASE_PATH', realpath(dirname(__FILE__) . '/..'));
define('OUT_PATH', BASE_PATH . '/src/Vhqtvn/AmazonMWS/Services/MarketplaceWebService/Model/FBAFeeds');
define('PREFIX', "MarketplaceWebServiceModelFBAFeeds");

@passthru("rm -f '" . escapeshellarg(OUT_PATH . "/*") . "'");
@mkdir(OUT_PATH);

$type_map = [
    'xsd:positiveInteger' => 'int',
    'xsd:date' => 'string',
];

foreach (glob(BASE_PATH . "/amazon-libraries/xsd/CartonContentsRequest.xsd") as $xsd) {
    echo "$xsd\n";
    $doc = new DOMDocument();
    $doc->loadXML(file_get_contents($xsd));
    $xpath = new DOMXPath($doc);
    $xpath->registerNamespace('xs', 'http://www.w3.org/2001/XMLSchema');

    $prefix = substr(basename($xsd), 0, -4);

    foreach ($xpath->evaluate("/xs:schema/xs:simpleType") as $e) {
        var_dump($e->getAttribute("name"));
        handle_simpletype($prefix . $e->getAttribute("name"), $e);
    }

    foreach ($xpath->evaluate("/xs:schema/xs:element") as $e) {
        var_dump($e->getAttribute("name"));
        traverse("", $e);
    }
}

function traverse($prefix, $xml)
{
    echo "traverse($prefix)\n";
    $name = $xml->getAttribute("name");
    $type = $xml->getAttribute("type");
    if (@$type) {
        global $type_map;
        if (isset($type_map[$type])) {
            return [
                'type' => $type_map[$type]
            ];
        } else {
            die("Unknow $type");
        }
    }
    $children = filter_nodes($xml->childNodes);
    if (count($children) != 1) {
        var_dump(__LINE__, $prefix, $children, $xml->attributes, $xml->getAttribute("name"));
        exit;
    }
    $child = $children[0];
    if ($child->nodeName === 'xsd:complexType') {
        $children = filter_nodes($child->childNodes);
        if (count($children) != 1) {
            var_dump(__LINE__, $children);
            exit;
        }
        $child = $children[0];
        if ($child->nodeName !== 'xsd:sequence') {
            var_dump(__LINE__, $child->nodeName);
            exit;
        }
        generate_child($prefix . $name, filter_nodes($child->childNodes));
    } else if ($child->nodeName === 'xsd:simpleType') {
        return handle_simpletype($prefix . $name, $child);
    } else {
        die("Unknow nodename $child->nodeName");
    }
}

function handle_simpletype($prefix, $child)
{
    echo "handle_simpletype($prefix)\n";
    $children = filter_nodes($child->childNodes);
    if (count($children) != 1) {
        var_dump(__LINE__, $children);
        exit;
    }
    $child = $children[0];
    if ($child->nodeName !== 'xsd:restriction') {
        var_dump(__LINE__, $child->nodeName);
        exit;
    }
    $base = $child->getAttribute('base');
    return generate_enum($prefix, $base, filter_nodes($child->childNodes));
}

function generate_child($type, $children)
{
    echo "generate_child($type)\n";
    $props = [];
    foreach ($children as $child) {
        if ($child->tagName != 'xsd:element') die("Unknow ___ {$child->nodeName}");
        $name = $child->getAttribute('name');
        $props [] = [
            'name' => $child->getAttribute('name'),
            'spec' => traverse($type, $child),
        ];
    }
    var_dump($props);
//    $content = "<?php\n\n";
//    $content .= "namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model;\n\n";
//    $content .= "use Vhqtvn\AmazonMWS\Services\MarketplaceWebService\MarketplaceWebServiceModel;\n\n";
//    $content .= "class $type extends MarketplaceWebServiceModel{\n";
//    $content .= "}\n";

}

function check_type_ref($ref)
{
    switch ($ref) {
        case 'SKU':
            return [
                'type' => 'string',
                'desc' => '1-40 characters',
            ];
    }
    return null;
}

function generate_enum($type, $base, $children)
{
    $values = [];
    foreach ($children as $child) {
        if ($child->nodeName !== 'xsd:enumeration') {
            if ($child->nodeName == 'xsd:pattern') {
                return [
                    'type' => 'string',
                    'desc' => "Must match pattern {$child->getAttribute('value')}"
                ];
            }
            die("??? {$child->nodeName}");
        }
        $values[] = $child->getAttribute('value');
    }

    $type = PREFIX . $type . "Enum";

    $out = OUT_PATH . "/$type.php";
    var_dump($out);
    assert(!file_exists($out));
    $content = "<?php\n\n";
    $content .= "namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model;\n\n";
    $content .= "class {$type}Enum{\n";
    $nn = [];
    $vv = [];
    foreach ($values as $value) {
        if (@$vv[$value]) continue;
        $vv[$value] = true;
        $name = strtoupper(preg_replace('@[^0-9A-Za-z]@', '', $value));
        if (@$nn[$name]) {
            die("Duplicate $name");
        }
        $nn[$name] = 1;

        if ($base === 'xsd:string' || $base === 'xsd:normalizedString') {

        } else if ($base === 'xsd:positiveInteger') {
            $value = intval($value);
        } else {
            die("Unknow base $base");
        }

        $content .= "    const K_$name = " . json_encode($value) . ";\n";
    }
    $content .= "\n\n";
    $content .= "    const VALUES = [\n";
    foreach ($nn as $n => $_) {
        $content .= "        self::K_$n,\n";
    }
    $content .= "    ];\n\n";
    $content .= "}\n";
    file_put_contents($out, $content);

    return [
        'type' => 'enum',
        'class' => $type
    ];
}

function filter_nodes($nodes)
{
    $r = [];
    foreach ($nodes as $node) {
        if ($node->nodeType == 1) $r[] = $node;
    }
    return $r;
}