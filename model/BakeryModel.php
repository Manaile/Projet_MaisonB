<?php
                                        /*MODEL DE LA PAGE 'BOULANGERIE' */
ini_set('display_errors','1');
ini_set('display_startup_errors','1');
error_reporting(E_ALL);

/*recupere la connexion à la bdd*/
require_once './database/Database.php';

class BakeryModel extends Database{
    public function __construct(){
        parent::__construct();
    }
    public function getBakeryImg(): array{
        //une autre petite requête pour récuperer url,description des photos de bon pains tout chaud.
        $query = $this->pdo->prepare
        (
            'SELECT id_bakery,
            url_bakery,
            description_bakery 
            FROM bakery_gallery'
        );

        $query->execute();
        $bakeryImg = $query->fetchAll(PDO::FETCH_ASSOC);
        return $bakeryImg;
        //on récupère les magnifiques créations
    }
   
}

?>