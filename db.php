<?php
require 'vendor/autoload.php'; // Libreria MongoDB

$client = new MongoDB\Client("mongodb://localhost:27017");
$database = $client->portfolio;
$collection = $database->projects;
?>
