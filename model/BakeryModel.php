<?php
ini_set('display_errors','1');
ini_set('display_startup_errors','1');
error_reporting(E_ALL);

require_once '../database/Database.php';

class BakeryModel extends Database{
    public function __construct(){
        parent::__construct();
    }
    public function getBakeryImg(){
        //recup ce qu'on a besoin
        $query = $this->pdo->prepare
        (
            'SELECT id_bakery,
            url,
            description 
            FROM bakery_gallery'
        );

        $query->execute();
        $bakeryImg = $query->fetchAll(PDO::FETCH_ASSOC);
        //var_dump($bakeryImg);
        return $bakeryImg;
    }
   
}

?>