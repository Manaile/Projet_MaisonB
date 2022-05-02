<?php

ini_set('display_errors','1');
ini_set('display_startup_errors','1');
error_reporting(E_ALL);

require_once '../database/Database.php';

class HomeModel extends Database{
    public function __construct(){
        parent::__construct();
    }
    public function getReviews(){
        //recup ce qu'on a besoin
        $query = $this->pdo->prepare
        (
            'SELECT nameReviews,
            messageReviews 
            FROM `reviews`'
        );

        $query->execute();
        $reviews = $query->fetchAll(PDO::FETCH_ASSOC);
        //var_dump($reviews);
        return $reviews;
    }
   
}

?>