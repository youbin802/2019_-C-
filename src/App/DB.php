<?php

namespace src\App;

class DB {
    private static $db = null;

    private static function getDB() {
        if(is_null(self::$db)) {
            self::$db = new \PDO("mysql:host=localhost; dbname=blog; charset=utf8mb4;" ,"root","");
        }
        return self::$db;
    }

    public static function fetch($sql, $data=[]) {
        $q = self::getDB()->prepare($sql);
        $q->execute($data);
        return $q->fetch(\PDO::FETCH_OBJ);
    }
    
    public static function fetchAll($sql, $data=[]) {
        $q = self::getDB()->prepare($sql);
        $q->execute($data);
        return $q->fetchAll(\PDO::FETCH_OBJ);
    }
    
    public static function execute($sql, $data=[]) {
        $q = self::getDB()->prepare($sql);
        return $q->execute($data);
    }
}