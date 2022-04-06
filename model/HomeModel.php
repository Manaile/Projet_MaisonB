<?php

ini_set('display_errors','1');
ini_set('display_startup_errors','1');
error_reporting(E_ALL);

require './database/Database.php';

class HomeModel extends Database{
    public function __construct(){
        parent::__construct();
    }
    public function getReviews(){

        $query = $this->pdo->prepare
        (
            'SELECT *
            FROM reviews'
        );

        $query->execute();
        $reviews = $query->fetchAll(PDO::FETCH_ASSOC);
        //var_dump($reviews);
        return $reviews;
    }
   
}

?>