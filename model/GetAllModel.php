<?php
ini_set('display_errors','1');
ini_set('display_startup_errors','1');
error_reporting(E_ALL);

require_once '../database/Database.php';

class GetAllModel extends Database{
    public function __construct(){
        parent::__construct();
    }
    public function getAllAdmin(){
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
        $getAllAdmin = $query->fetchAll(PDO::FETCH_ASSOC);
        //var_dump($get);
        return $getAllAdmin;
    }
    public function getAllAbout(){
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
        $getAllAbout = $query->fetchAll(PDO::FETCH_ASSOC);
        //var_dump($get);
        return $getAllAbout;
    }
    public function getAllBakery(){
        //recup ce qu'on a besoin
        $query = $this->pdo->prepare
    (
    'SELECT id_bakery,
            url_bakery,
            description_bakery 
    FROM bakery_gallery '
        );

        $query->execute();
        $getAllBakery = $query->fetchAll(PDO::FETCH_ASSOC);
        //var_dump($get);
        return $getAllBakery;
    }
    public function getAllPastry(){
        //recup ce qu'on a besoin
        $query = $this->pdo->prepare
    (
    'SELECT id_pastry,
            url_pastry,
            description_pastry 
    FROM pastry_gallery '
        );

        $query->execute();
        $getAllPastry = $query->fetchAll(PDO::FETCH_ASSOC);
        //var_dump($get);
        return $getAllPastry;
    }
    public function getAllClass(){
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
        $getAllClass = $query->fetchAll(PDO::FETCH_ASSOC);
        //var_dump($get);
        return $getAllClass;
    }
    public function getAllReviews(){
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
        $getAllReviews = $query->fetchAll(PDO::FETCH_ASSOC);
        //var_dump($get);
        return $getAllReviews;
    }
    public function getAllContact(){
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
        $getAllContact = $query->fetchAll(PDO::FETCH_ASSOC);
        //var_dump($get);
        return $getAllContact;
    }
   
}

?>