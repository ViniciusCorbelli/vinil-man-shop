<?php

try {
        $pdo = new PDO('mysql:host=127.0.0.1; dbname=vinilmanshop', 'root', '');
} catch (PDOException $e) {
         die('Could not connect.');
}



$statement = $pdo->prepare('select * from vinilmanshop');

$statement-> execute();

$results = $statement->fetchAll(PDO::FETCH_OBJ);

var_dump($results[0]->description);

require ('view-usuario.php');




