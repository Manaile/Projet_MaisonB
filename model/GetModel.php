<?php
ini_set('display_errors','1');
ini_set('display_startup_errors','1');
error_reporting(E_ALL);

require_once '../database/Database.php';

class GetModel extends Database{
    public function __construct(){
        parent::__construct();
    }
    public function getAdmin($id){
        //recup ce qu'on a besoin
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

        //;
        $query->execute($id);
        $getAdmin = $query->fetchAll(PDO::FETCH_ASSOC);
        //var_dump($getAdmin);
        return $getAdmin;
    }
    public function getAdminTeam($id){
        //recup ce qu'on a besoin
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

        //;
        $query->execute($id);
        $getAdminTeam = $query->fetchAll(PDO::FETCH_ASSOC);
        //var_dump($getAdminTeam);
        return $getAdminTeam;
    }
    public function getAdminBakery($id){
        //recup ce qu'on a besoin
        $id= array($_GET['id']);
        $query = $this->pdo->prepare
    (
        'SELECT id_bakery,
                url_bakery,
                description_bakery
        FROM bakery_gallery 
        WHERE id_bakery = ?', [$id]
    );

        //;
        $query->execute($id);
        $getAdminBakery = $query->fetchAll(PDO::FETCH_ASSOC);
        //var_dump($getAdminTeam);
        return $getAdminBakery;
    }
    public function getAdminPastry($id){
        //recup ce qu'on a besoin
        $id= array($_GET['id']);
        $query = $this->pdo->prepare
    (
        'SELECT id_pastry,
                url_pastry,
                description_pastry
        FROM pastry_gallery 
        WHERE id_pastry = ?', [$id]
    );

        //;
        $query->execute($id);
        $getAdminPastry = $query->fetchAll(PDO::FETCH_ASSOC);
        //var_dump($getAdminTeam);
        return $getAdminPastry;
    }
    public function getAdminPastryClass($id){
        //recup ce qu'on a besoin
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

        //;
        $query->execute($id);
        $getAdminPastry = $query->fetchAll(PDO::FETCH_ASSOC);
        //var_dump($getAdminTeam);
        return $getAdminPastry;
    }
}


?>