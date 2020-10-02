<?php

try {
$pdo = new PDO("mysql:host=localhost;dbname=mytodo", 'root', 'root');
//PDO stands for PHP data object
//try to connect to PDO
} catch (PDOException $e) {
    //catch any exception here
    die($e->getMessage());
}

$pdo -> prepare('select * from todos');
//prepare a statement now we need to execute

$statement->execute();

$todosData = $statement->fetchAll(PDO::FETCH_OBJ);
//fetching everything into memory and storing each column/row into an object

var_dump($results[0]->description);

require 'index.view.php';