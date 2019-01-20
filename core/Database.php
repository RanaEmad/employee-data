<?php
namespace Employee\Core;

class Database{
    protected $db;
    public function __construct() {
        $this->db=  DbConnection::getInstance();
    }
}