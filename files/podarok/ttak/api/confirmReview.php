<?php
     $db = new PDO('mysql:host=localhost;dbname=mixplaster_akbur', 'mixplaster_akbur', 'TzRP7L8w');

        $stmt = $db->prepare("UPDATE reviews SET status = 2 WHERE id = :id");
    	$stmt->bindParam(':id', $_GET['id']);
        $stmt->execute();

    echo "Отзыв подтвержден";


?>