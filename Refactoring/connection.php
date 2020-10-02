<?php

class Connection
{
    public static function make()
    {
        try {
            return new PDO('mysql:host=127.0.0.1;dbname=mytodo', 'root', '');
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}

$pdo=Connection::make();
//use double colons when the function is a static function to call it