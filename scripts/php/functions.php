<?php

    /*database functions*/

    function dbname()
    {
        return [
            'host' => 'localhost',
            'user' => 'root',
            'pass' => 'root',
            'name' => 'hunter_base',
            'port' => '8889'
        ];
    }

    function dbconnect()
    {
        $db = dbname();
        
        try
        {
            return $connect = new PDO("mysql:host={$db['host']};dbname={$db['name']};port={$db['port']};charset=UTF8", $db['user'], $db['pass'],
            [
                PDO::ATTR_EMULATE_PREPARES => false, 
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ]);
        }
        catch (PDOException $error) 
        {
            return $error->getMessage();
            exit('Database error');
        };
        
    }

?>