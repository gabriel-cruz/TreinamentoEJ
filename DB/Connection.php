<?php

namespace DB;

abstract class Connection{
    private static $connection;
    
    public static function getConnection(){

        if(!self::$connection){
            self::$connection = new \PDO('mysql: host=localhost; dbname=treinamento', 'root', '');
        }

        return self::$connection;
    }

}