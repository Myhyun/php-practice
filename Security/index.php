<?php

return [
    'database' => [
        'name' => 'Matt',
        'password' => '12345',
        'connection' => 'mysql:host=127.0.0.1'
    ]
];

class Connection
{


    public static function make($config)
    {
        try {
            return new PDO('mysql:host=127.0.0.1;dbname=mytodo', 'Matt', '12345');

            return new PDO(
                $config['connection'] . ';dbname=' . $config['name'],
                $config['name'],
                $config['password']
            );

            //This code above shows the difference between hard coded passwords and replace them with configuration items. 
            //This is good for security as no personal information is hard coded in

        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}
