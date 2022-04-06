<?php

ini_set('display_errors','1');
ini_set('display_startup_errors','1');
error_reporting(E_ALL);

class Database{

    private $host = 'localhost';
    private $dbname = 'maisonb';
    private $username = 'root';
    private $password = 'root';  

    public $pdo;

    public function __construct(){

        $this->connect();
    }

    function connect() {
        $server = 'mysql:host='. $this->host . ';dbname='. $this->dbname;
      
        try {
            $this->pdo = new PDO($server, $this->username, $this->password, /*$options*/);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo 'Connexion réussie';
        }
        catch(PDOException $e) {
            $this->error = $e->getMessage();
        }

    }
    
}

?>