<?php
/**
 * Created by IntelliJ IDEA.
 * User: vhnvn
 * Date: 3/14/18
 * Time: 4:37 PM
 */
define('BASE_PATH', realpath(dirname(__FILE__) . '/..'));

@mkdir(BASE_PATH . '/amazon-libraries');
@mkdir(BASE_PATH . '/amazon-libraries/xsd');

$s = file_get_contents("http://docs.developer.amazonservices.com/en_US/feeds/Feeds_FeedType.html");

preg_match_all('@<a class="xref" href="([^"]+\.xsd)" target="_blank">@ism', $s, $m);

foreach($m[1] as $link) {
    $link = html_entity_decode($link);
    $target = BASE_PATH . '/amazon-libraries/xsd/' . basename($link);
    echo "Download $link... to $target\n";
    if(!@copy($link, $target)) {
        die("Download failed");
    }
}