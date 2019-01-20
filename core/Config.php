<?php

namespace Employee\Core;

class Config{
    public $host;
    public $dbName;
    public $username;
    public $password;
    
    public function __construct() {
        $this->host="localhost";
        $this->dbName="employee-data";
        $this->username="employee-data";
        $this->password="employee-data";
    }
}
