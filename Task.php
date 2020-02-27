<?php

class Tasks {
    public $id;
    public $descption;
    public $incompleted;
    public $edited;
    public $added;
}

public function all() {
    global $pdo;
    $statement = $pdo->prepare('SELECT * FROM todo');
    $statement->execute();

    return $statement->FetchAll()
}