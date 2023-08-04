<?php
require_once dirname(__FILE__,2)."/config/config.php";
class DBConnection{
    private $host;
    private $user;
    private $pass;
    private $dbname;
    private $conn;
    public function __construct(){
        $this->host = DB_HOST;
        $this->user = DB_USER;
        $this->pass = DB_PASS;
        $this->dbname = DB_NAME;
        try {
            $this->conn = new PDO("mysql:host=localhost;dbname=xproject", "root", "");
        } catch (PDOException) {
            echo $e->getMessage();
        }
    }
    public function getConnection(){
        return $this->conn;
    }
} 
?>