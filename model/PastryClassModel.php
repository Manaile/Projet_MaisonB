<?php
ini_set('display_errors','1');
ini_set('display_startup_errors','1');
error_reporting(E_ALL);

require_once '../database/Database.php';

class PastryClassModel extends Database{
    public function __construct(){
        parent::__construct();
    }
    public function getPastryClassCard(){
        //recup ce qu'on a besoin
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
        //var_dump($pastryClassCard);
        return $pastryClassCard;
    }
   
}

?>