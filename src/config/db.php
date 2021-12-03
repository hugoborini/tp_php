<?php
class db {
    static $dsn = 'mysql:host=db;dbname=tp_php;charset=utf8';
    static $user = 'root';
    static $pwd = 'example';
    static $db = 'demo';

    static function dbConnect() : PDO 
    {
        $pdo = new PDO(self::$dsn, self::$user, self::$pwd);
        return $pdo;
    } 
        
}

