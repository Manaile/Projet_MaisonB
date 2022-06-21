<?php
                                        /*MODEL DU GET POUR LE CRUD */
ini_set('display_errors','1');
ini_set('display_startup_errors','1');
error_reporting(E_ALL);

/*recupere la connexion à la bdd*/
require_once './database/Database.php';

class GetModel extends Database{
    public function __construct(){
        parent::__construct();
    }
    public function getAdmin($id): array{
        //Ouuh un SELECT un peu plus complexe.. vous voulez des explictions? Let's go!
        //c'est un SELECT ou on chope en fonction de l'id qui est récupéré avec le GET!
        $id= array($_GET['id']);
        $query = $this->pdo->prepare
    (
        'SELECT id_admin,
                name,
                email,
                password
        FROM admin 
        WHERE id_admin = ?', [$id]
    );
        $query->execute($id);
        $getAdmin = $query->fetchAll(PDO::FETCH_ASSOC);
        return $getAdmin;//on récupère ça dans notre variable..
    }

    public function getAdminTeam($id): array{
        //c'est la meme chose qu'au dessus
        $id= array($_GET['id']);
        $query = $this->pdo->prepare
    (
        'SELECT id_about,
                url_about,
                name_about,
                profession_about,
                description_about
        FROM about_gallery 
        WHERE id_about = ?', [$id]
    );
        $query->execute($id);
        $getAdminTeam = $query->fetchAll(PDO::FETCH_ASSOC);
        return $getAdminTeam;
    }
    public function getAdminBakery($id): array{
        //c'est la meme chose chez le voisin du premier
        $id= array($_GET['id']);
        $query = $this->pdo->prepare
    (
        'SELECT id_bakery,
                url_bakery,
                description_bakery
        FROM bakery_gallery 
        WHERE id_bakery = ?', [$id]
    );

        $query->execute($id);
        $getAdminBakery = $query->fetchAll(PDO::FETCH_ASSOC);
        return $getAdminBakery;
    }
    public function getAdminPastry($id): array{
        //c'est la meme chose chez le voisin du premier
        $id= array($_GET['id']);
        $query = $this->pdo->prepare
    (
        'SELECT id_pastry,
                url_pastry,
                description_pastry
        FROM pastry_gallery 
        WHERE id_pastry = ?', [$id]
    );

        $query->execute($id);
        $getAdminPastry = $query->fetchAll(PDO::FETCH_ASSOC);
        return $getAdminPastry;
    }
    public function getAdminPastryClass($id){
        //on copie sur le voisin d'en haut!
        $id= array($_GET['id']);
        $query = $this->pdo->prepare
    (
        'SELECT id_pastryClass,
                url_pastryClass,
                description_pastryClass,
                name_pastryClass,
                date_pastryClass,
                price_pastryClass
        FROM pastryclass_gallery 
        WHERE id_pastryClass = ?', [$id]
    );
        $query->execute($id);
        $getAdminPastry = $query->fetchAll(PDO::FETCH_ASSOC);
        return $getAdminPastry;
    }
}

?>