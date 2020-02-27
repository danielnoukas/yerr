<?php

try {
    $pdo = new PDO(
        'mysql:host=d83220.mysql.zonevs.eu;dbname=d83220_tak18',
        'name=d83220_tak18', 'vinkuviiner123'
    );
} catch (PDOException $e) {
    die($e->getMessage());
}

$statement = $pdo->prepare('SELECT * FROM todos');
$statement->execute();

$todoes = $statement->fetchALL(PDO::FETCH_OBJ);
var_dump($tasks);