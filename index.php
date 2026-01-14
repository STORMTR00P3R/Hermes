<?php

require __DIR__ . '/vendor/autoload.php';

$url = "https://www.teamcherry.com.au/blog?format=rss";

$rss = Feed::loadRss($url);

echo "<pre>";

print_r($rss); // expect a SimpleXMLObject

?>
