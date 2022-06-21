<?php
                                        /*MODEL DE LA PAGE 'ATELIER' */
ini_set('display_errors','1');
ini_set('display_startup_errors','1');
error_reporting(E_ALL);

/*recupere la connexion à la bdd*/
require_once './database/Database.php';

class PastryClassModel extends Database{
    public function __construct(){
        parent::__construct();
    }
    public function getPastryClassCard(){
        //petite requête SELECT vous êtes habitués de la voir hein.. on récupère url,nom,description,date,prix des ateliers
        $query = $this->pdo->prepare
        (
            'SELECT url_pastryclass,
                    description_pastryclass,
                    name_pastryclass,
                    date_pastryclass,
                    price_pastryclass
            FROM pastryclass_gallery'
        );

        $query->execute();
        $pastryClassCard = $query->fetchAll(PDO::FETCH_ASSOC);
        return $pastryClassCard; //on récupère ça dans notre variable..
    }
   
}

?>