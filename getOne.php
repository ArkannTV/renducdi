<?php
require_once('database.php');

$request = $database->prepare("SELECT * FROM article ORDER BY date DESC LIMIT 1"); // Pour trier les tweets du plus anciens aux plus récents
$request->execute();
$tweets = $request->fetch(PDO::FETCH_ASSOC);
print json_encode($tweets);