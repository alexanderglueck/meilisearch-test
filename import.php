<?php

require_once __DIR__ . '/vendor/autoload.php';

use MeiliSearch\Client;

$client = new Client('http://meili:7700');

$movies_json = file_get_contents('movies.json');
$movies = json_decode($movies_json);

var_dump($client->index('movies')->addDocuments($movies));
