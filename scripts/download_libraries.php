<?php

define('BASE_PATH', realpath(dirname(__FILE__) . '/..'));

@mkdir(BASE_PATH . '/amazon-libraries');

$s = file_get_contents('https://developer.amazonservices.com/');
preg_match('@APIs \& Documentation.*?<ul>(.*?)</ul>@ism', $s, $m);
$s = $m[1];
preg_match_all('@<a href="([^"]+)">@ism', $s, $m);
foreach($m[1] as $link) {
  echo "* $link\n";
  $link = html_entity_decode($link);
  $s = file_get_contents($link);
  if(preg_match_all('@<a href="([^"]+)">PHP Client Library</a>@ism', $s, $m2) != 1) {
    die("Error: $link");
  }
  $link = html_entity_decode($m2[1][0]);
  $s = file_get_contents($link);
  if(!preg_match('@</h1><a href="([^"]+)"@ism', $s, $m2)) {
    die("Err2: $link");
  }
  $link = html_entity_decode($m2[1]);
  if (basename($link) === 'login-and-pay-with-amazon-sdk-php') continue;
  $target = BASE_PATH . '/amazon-libraries/' . basename($link);
  echo "Download $link... to $target\n";
  if(!@copy($link, $target)) {
    die("Download failed");
  }
}