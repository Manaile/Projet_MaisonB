<?php
                                        /*MODEL DU READ POUR LE CRUD */
ini_set('display_errors','1');
ini_set('display_startup_errors','1');
error_reporting(E_ALL);

/*recupere la connexion à la bdd*/
require_once '../database/Database.php';

class GetAllModel extends Database{
    public function __construct(){
        parent::__construct();
    }
    public function getAllAdmin(): array{
        //un SELECT classique pour read les admins
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
        return $getAllAdmin;
    }
    public function getAllAbout(): array{
        //un SELECT classique pour read l'equipe'
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
        return $getAllAbout;
    }
    public function getAllBakery(): array{
        //un SELECT classique pour read la boulangerie
        $query = $this->pdo->prepare
    (
    'SELECT id_bakery,
            url_bakery,
            description_bakery 
    FROM bakery_gallery '
        );

        $query->execute();
        $getAllBakery = $query->fetchAll(PDO::FETCH_ASSOC);
        return $getAllBakery;
    }
    public function getAllPastry(): array{
        //un SELECT classique pour read la patisserie
        $query = $this->pdo->prepare
    (
    'SELECT id_pastry,
            url_pastry,
            description_pastry 
    FROM pastry_gallery '
        );

        $query->execute();
        $getAllPastry = $query->fetchAll(PDO::FETCH_ASSOC);
        return $getAllPastry;
    }
    public function getAllClass(): array{
        //un SELECT classique pour read les ateliers
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
        return $getAllClass;
    }
    public function getAllReviews(): array{
        //un SELECT classique pour read les avis
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
        return $getAllReviews;
    }
    public function getAllContact(): array{
        //un SELECT avec LEFT JOIN pour read tt les messages reçu
        $query = $this->pdo->prepare
    (
    'SELECT id_contact,
            nameContact,
            phoneContact,
            mailContact,
            messageContact,
            messageReviews
    FROM contact
    LEFT JOIN reviews ON mailContact=reviews.mailReviews'
        );
        $query->execute();
        $getAllContact = $query->fetchAll(PDO::FETCH_ASSOC);
        return $getAllContact;
    }
}
?>