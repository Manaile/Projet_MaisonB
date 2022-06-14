<?php
                                        /*MODEL DE LA PAGE 'PATISSERIE' */
ini_set('display_errors','1');
ini_set('display_startup_errors','1');
error_reporting(E_ALL);

/*recupere la connexion à la bdd*/
require_once '../database/Database.php';

class PastryModel extends Database{
    public function __construct(){
        parent::__construct();
    }
    public function getPastryImg(): array{
        //what?! encore un SELECT! bon récupère de la bdd id,url et description de la table patisserie
        $query = $this->pdo->prepare
        (
            'SELECT id_pastry,
            url_pastry,
            description_pastry 
            FROM pastry_gallery'
        );

        $query->execute();
        $pastryImg = $query->fetchAll(PDO::FETCH_ASSOC);
        return $pastryImg;//on récupère les bonnes patisserie dans notre variable..
    }
}
?>