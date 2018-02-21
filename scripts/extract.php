<?php

define('BASE_PATH', realpath(dirname(__FILE__) . '/..'));

$output = BASE_PATH . "/amazon-srcs/";
passthru("rm -rf " . escapeshellarg($output . "*"));

@mkdir(BASE_PATH . '/amazon-srcs');

foreach(glob(BASE_PATH . '/amazon-libraries/*.zip') as $zip) {
  echo "* $zip\n";
  passthru("unzip -qo $zip -d " . escapeshellarg($output));
}