<?php

    namespace App\lib\Database;

abstract class Connection{

    private static $conn;

    public static function getConn(){
        if(!self::$conn){
            self::$conn = new \PDO('mysql:host=localhost;dbname=db_login_php', 'root', '');
        }

        return self::$conn;
    }

}

?>