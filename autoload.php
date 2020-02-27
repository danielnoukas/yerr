<?php
try {
    $pdo = new PDO(
        'mysql:host=d83220.mysql.zonevs.eu;dbname=d83220_tak18',
        'd83220_daniel17', 'vinkuviiner123'
    );
} catch (PDOException $e) {
    die($e->getMessage());
    $tasks = $statement->fetchALL(PDO::FETCH_CLASS, 'Task');
var_dump($tasks);
}

require_once 'model/Task.php'
