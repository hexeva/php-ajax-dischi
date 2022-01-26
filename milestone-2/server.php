<?php 
 require_once __DIR__ . '/database.php';

//  var_dump($database);

$json = json_encode($database);

header('Content-Type: application/json');

echo $json;

?>