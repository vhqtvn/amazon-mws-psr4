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

foreach ($m[1] as $link) {
    $link = html_entity_decode($link);
    $target = BASE_PATH . '/amazon-libraries/xsd/' . basename($link);
    if (!file_exists($target)) {
        echo "Download $link... to $target\n";
        if (!@copy($link, $target)) {
            die("Download failed");
        }
    }
}

@copy("https://images-na.ssl-images-amazon.com/images/G/01/rainier/help/xsd/release_4_1/amzn-base.xsd",
    BASE_PATH . '/amazon-libraries/xsd/amzn-base.xsd');

@copy("https://images-na.ssl-images-amazon.com/images/G/01/rainier/help/xsd/release_1_9/amzn-envelope.xsd",
    BASE_PATH . '/amazon-libraries/xsd/amzn-envelope.xsd');

@copy("https://images-na.ssl-images-amazon.com/images/G/01/rainier/help/xsd/release_1_9/amzn-header.xsd",
    BASE_PATH . '/amazon-libraries/xsd/amzn-header.xsd');

@copy("https://images-na.ssl-images-amazon.com/images/G/01/rainier/help/xsd/release_1_9/Listings.xsd",
    BASE_PATH . '/amazon-libraries/xsd/Listings.xsd');

@copy("https://images-na.ssl-images-amazon.com/images/G/01/rainier/help/xsd/release_1_9/FulfillmentCenter.xsd",
    BASE_PATH . '/amazon-libraries/xsd/FulfillmentCenter.xsd');

@copy("https://images-na.ssl-images-amazon.com/images/G/01/rainier/help/xsd/release_1_9/ProcessingReport.xsd",
    BASE_PATH . '/amazon-libraries/xsd/ProcessingReport.xsd');

@copy("https://images-na.ssl-images-amazon.com/images/G/01/rainier/help/xsd/release_1_9/SettlementReport.xsd",
    BASE_PATH . '/amazon-libraries/xsd/SettlementReport.xsd');

