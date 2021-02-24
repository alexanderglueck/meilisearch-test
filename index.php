<?php

require_once __DIR__ . '/vendor/autoload.php';

use MeiliSearch\Client;

$client = new Client('http://meili:7700');

$hits = $client->index('movies')->search($_GET['q']);

foreach ($hits->getIterator() as $item) {
    echo $item['title'] . '<br>';
}
