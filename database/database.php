<?php

ini_set('display_errors','1');
ini_set('display_startup_errors','1');
error_reporting(E_ALL);

class Database{
    public function __construct(){
        
    
        try {
            $pdo = new PDO('mysql:host=localhost;dbname=maisonb;charset=utf8', 'root', 'root');
        }
        catch(Exception $e) {
            die('Erreur : '.$e->getMessage());
        }
        
    }
    
}

?>