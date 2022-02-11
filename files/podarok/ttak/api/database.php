<?php
$name = "TEST";
$img = "TEST";
$review = "TEST";
$email = "TEST";
$db = new PDO('mysql:host=localhost;dbname=mixplaster_akbur', 'mixplaster_akbur', 'TzRP7L8w');
$statement = $db->prepare('INSERT INTO reviews (title, descr, img, status, email)
    VALUES (:title, :descr, :img, :status, :email)');
$statement->execute([
    'title' => $name,
    'descr' => $review,
    'img' => $img,
    'status' => '1',
    'email' => $email,
]);
$rId = $db->lastInsertId();
 echo $rId
?>