<?php
ini_set('display_errors','1');
ini_set('display_startup_errors','1');
ini_set('memory_limit', '2048M');
error_reporting(E_ALL);

require_once '../database/Database.php';

class AdminModel extends Database{
    public function __construct(){
        parent::__construct();
    }
    public function getAdmin(){
        //recup ce qu'on a besoin
        $query = $this->pdo->prepare
    (
    'SELECT id_admin,
            name,
            email,
            password  
    FROM admin '
        );

        $query->execute();
        $getAdmin = $query->fetchAll(PDO::FETCH_ASSOC);
        //var_dump($get);
        return $getAdmin;
    }
    public function getAbout(){
        //recup ce qu'on a besoin
        $query = $this->pdo->prepare
    (
    'SELECT id_about,
            url_about,
            name_about,
            profession_about,
            description_about 
    FROM about_gallery '
        );

        $query->execute();
        $getAbout = $query->fetchAll(PDO::FETCH_ASSOC);
        //var_dump($get);
        return $getAbout;
    }
    public function getBakery(){
        //recup ce qu'on a besoin
        $query = $this->pdo->prepare
    (
    'SELECT id_bakery,
            url_bakery,
            description_bakery 
    FROM bakery_gallery '
        );

        $query->execute();
        $getBakery = $query->fetchAll(PDO::FETCH_ASSOC);
        //var_dump($get);
        return $getBakery;
    }
    public function getPastry(){
        //recup ce qu'on a besoin
        $query = $this->pdo->prepare
    (
    'SELECT id_pastry,
            url_pastry,
            description_pastry 
    FROM pastry_gallery '
        );

        $query->execute();
        $getPastry = $query->fetchAll(PDO::FETCH_ASSOC);
        //var_dump($get);
        return $getPastry;
    }
    public function getClass(){
        //recup ce qu'on a besoin
        $query = $this->pdo->prepare
    (
    'SELECT id_pastryClass,
            url_pastryClass,
            description_pastryClass,
            name_pastryClass,
            date_pastryClass,
            price_pastryClass
    FROM pastryClass_gallery'
        );

        $query->execute();
        $getClass = $query->fetchAll(PDO::FETCH_ASSOC);
        //var_dump($get);
        return $getClass;
    }
    public function getReviews(){
        //recup ce qu'on a besoin
        $query = $this->pdo->prepare
    (
    'SELECT id_reviews,
            nameReviews,
            phoneReviews,
            mailReviews,
            messageReviews
    FROM reviews'
        );

        $query->execute();
        $getReviews = $query->fetchAll(PDO::FETCH_ASSOC);
        //var_dump($get);
        return $getReviews;
    }
    public function getContact(){
        //recup ce qu'on a besoin
        $query = $this->pdo->prepare
    (
    'SELECT id_contact,
            nameContact,
            phoneContact,
            mailContact,
            messageContact
    FROM contact'
        );

        $query->execute();
        $getContact = $query->fetchAll(PDO::FETCH_ASSOC);
        //var_dump($get);
        return $getContact;
    }
   
}

?>