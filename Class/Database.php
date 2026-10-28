<?php
    class Database{
        protected $conn;
        public function __construct(){
            $_ENV = parse_ini_file(_DIR_ . "/../.env");
            $host=$_ENV['DB_HOST'];
            $un=$_ENV['DB_USERNAME'];
            $pass=$_ENV['DB_PASSWORD'];
            $db=$_ENV['DB_DATABASE'];
            $this->conn=new mysqli($host,$un,$pass,$db);
        }
    }
?>