<?php

    require_once './config/config.php';
    
    class Database{
        public $host    = DB_HOST;
        public $user    = DB_USER;
        public $pass    = DB_PASS;
        public $name    = DB_NAME;
        public $dsn;
        public $con;

        public function __construct(){
            $this->connection();
        }

        protected function connection(){
            try {
                $this->dsn = "mysql:host=".$this->host."; dbname=".$this->name;
                $this->con = new PDO($this->dsn, $this->user, $this->pass);
                
            } catch (PDOException $e) {
                echo "Connection failled";
            }
        }
        
    }
 
?>