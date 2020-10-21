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

    public static function getConnection2(){ 
        if(!self::$connection){
            self::$connection = mysqli_connect("localhost", "root", "", "treinamento");
        }

        return self::$connection;
    }

}