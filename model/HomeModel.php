<?php
                                        /*MODEL DE LA PAGE 'ACCUEIL' */
ini_set('display_errors','1');
ini_set('display_startup_errors','1');
error_reporting(E_ALL);

//recuperation de la bdd
require_once './database/Database.php';

class HomeModel extends Database{
    public function __construct(){
        parent::__construct();
    }
    public function getReviews(): array{
        //une autre petite requête pour récuperer les noms et les messages des clients de maisonb 
        $query = $this->pdo->prepare
        (
            'SELECT nameReviews,
            messageReviews 
            FROM `reviews`'
        );

        $query->execute();
        $reviews = $query->fetchAll(PDO::FETCH_ASSOC);
        return $reviews;//on récupère tous cela 
    }
   
}

?>