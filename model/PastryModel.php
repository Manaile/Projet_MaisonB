<?php
ini_set('display_errors','1');
ini_set('display_startup_errors','1');
error_reporting(E_ALL);

require_once '../database/Database.php';

class PastryModel extends Database{
    public function __construct(){
        parent::__construct();
    }
    public function getPastryImg(){
        //recup ce qu'on a besoin
        $query = $this->pdo->prepare
        (
            'SELECT url,
            description 
            FROM pastry_gallery'
        );

        $query->execute();
        $pastryImg = $query->fetchAll(PDO::FETCH_ASSOC);
        //var_dump($bakeryImg);
        return $pastryImg;
    }
   
}

?>