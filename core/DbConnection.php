<?php

namespace Employee\Core;

class DbConnection {
    private static $instance = null;
    private function __construct() {
    }

    public static function getInstance() {
        if (self::$instance=== null) {
            $dbConfig= new Config();
            try {
               self::$instance = new \PDO("mysql:host=" .$dbConfig->host . ";dbname=" . $dbConfig->dbName, $dbConfig->username, $dbConfig->password);
            } catch (PDOException $e) {
                echo $e->getMessage();
                die();
            }
        }
        return self::$instance;
    }

}
