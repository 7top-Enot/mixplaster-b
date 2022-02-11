<?php

$db = new PDO('mysql:host=localhost;dbname=mixplaster_akbur', 'mixplaster_akbur', 'TzRP7L8w');

$stmt = $db->prepare("SELECT * FROM reviews WHERE `status` = 2");
$stmt->execute();
$rows = $stmt->fetchAll();
$jsonData = array();
foreach($rows as $row)
{
$jsonData[] = $row;
}

echo json_encode($jsonData);


?>