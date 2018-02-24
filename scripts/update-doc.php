<?php
require(dirname(__FILE__) . '/../vendor/autoload.php');
error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE & ~E_DEPRECATED);

use Colors\Color;

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


handle_dir(0, base_path('/src/Vhqtvn/AmazonMWS/Services'), ["Vhqtvn", "AmazonMWS", "Services"]);

function handle_dir($depth, $dir, $ns)
{
    global $C;
    foreach (files($dir) as $file) {
        $path = "$dir/$file";
        if (is_file($path)) {
            if (substr($path, -4) == ".php") {
                echo $C(pad($depth) . "$file")->red . "\n";
                handle_php($path, $ns);
            }
        } else {
            echo $C(pad($depth) . "$file")->blue . PHP_EOL;
            handle_dir($depth + 1, $path, array_merge($ns, $file));
        }
    }
}

function handle_php($path, $ns)
{

}