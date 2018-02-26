<?php
/**
 * Created by IntelliJ IDEA.
 * User: vhnvn
 * Date: 2/26/18
 * Time: 6:59 AM
 */
$s = file_get_contents($argv[1]);
if (!preg_match('@class ([^\s]+)@ism', $s, $m)) exit(-1);
$path = $argv[1];
while ($path != "" && $path != "/") {
    $path = dirname($path);
    if (file_exists($fn = "$path/Samples/.config.inc.php")) {
        chdir(dirname($path));
        require($fn);
        break;
    }
}
$class = $m[1];
require $argv[1];
$instance = new $class;
$reflectionClass = new ReflectionClass($class);
try {
    $reflectionProperty = $reflectionClass->getProperty('_fields');
} catch (\Exception $ex) {
    $reflectionProperty = $reflectionClass->getProperty('fields');
}
$reflectionProperty->setAccessible(true);
$type = $reflectionProperty->getValue($instance)[$argv[2]]['FieldType'];
if (is_string($type)) {
} else if (!is_array($type) || count($type) != 1) {
    var_dump("type wrong", $type);
    exit(-1);
} else $type = $type[0];
echo $type;
exit(0);