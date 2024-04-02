<?php

class Database {
    private $servername = "localhost";
    private $dbname = "LTW";
    private $username = "root";
    private $password = "";
    private $pdo;

    public function __construct() {
        $dsn = "mysql:host={$this->servername};dbname={$this->dbname}";
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
        ];
        try {
            $this->pdo = new PDO($dsn, $this->username, $this->password, $options);
        } catch (Exception $e) {
            echo "Connection failed: {$e->getMessage()}";
        }
    }

    public function getConnection() {
        return $this->pdo;
    }

    public function closeConnection() {
        $this->pdo = null;
    }
}