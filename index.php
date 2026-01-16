<?php

require __DIR__ . '/vendor/autoload.php';

$url = "https://www.teamcherry.com.au/blog?format=rss";

$rss = Feed::loadRss($url);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Hermes - Elias</title>
</head>
<body>
    <h1><?=  htmlspecialchars($rss->title) ?>></h1>
    <?php foreach($rss->item as $item): ?>
        <ul>
            <li><?= htmlspecialchars($item->item) ?></li>
        </ul>
    <?php endforeach ?>
</body>
</html>