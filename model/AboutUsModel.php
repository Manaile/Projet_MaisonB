<?php
ini_set('display_errors','1');
ini_set('display_startup_errors','1');
error_reporting(E_ALL);

require_once '../database/Database.php';

class AboutUsModel extends Database{
    public function __construct(){
        parent::__construct();
    }
    public function getAboutUsImg(){
        //recup ce qu'on a besoin
        $query = $this->pdo->prepare
        (
            'SELECT url_about,
            description_about,
            name_about,
            profession_about
            FROM about_gallery'
        );

        $query->execute();
        $AboutUsImg = $query->fetchAll(PDO::FETCH_ASSOC);
        //var_dump($AboutUsImg);
        return $AboutUsImg;
    }
   
}

?>