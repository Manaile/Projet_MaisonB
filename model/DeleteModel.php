<?php
ini_set('display_errors','1');
ini_set('display_startup_errors','1');
error_reporting(E_ALL);

require_once '../database/Database.php';

class DeleteModel extends Database{
    public function __construct(){
        parent::__construct();
    }
    public function deleteAdmin($id){
        //recup ce qu'on a besoin
        $id= array($_GET['id']);
        $query = $this->pdo->prepare
    (
        'DELETE 
        FROM admin 
        WHERE id_admin = ?', [$id]
    );

        //;
        $query->execute($id);
        $deleteAdmin = $query->fetchAll(PDO::FETCH_ASSOC);
        //var_dump($getAdmin);
        return $deleteAdmin;
    }
    public function deleteAdminTeam($id){
        //recup ce qu'on a besoin
        $id= array($_GET['id']);
        $query = $this->pdo->prepare
    (
        'DELETE 
        FROM about_gallery 
        WHERE id_about = ?', [$id]
    );

        //;
        $query->execute($id);
        $deleteAdminTeam = $query->fetchAll(PDO::FETCH_ASSOC);
        //var_dump($getAdmin);
        return $deleteAdminTeam;
    }
    public function deleteAdminBakery($id){
        //recup ce qu'on a besoin
        $id= array($_GET['id']);
        $query = $this->pdo->prepare
    (
        'DELETE 
        FROM bakery_gallery 
        WHERE id_bakery = ?', [$id]
    );

        //;
        $query->execute($id);
        $deleteAdminBakery = $query->fetchAll(PDO::FETCH_ASSOC);
        //var_dump($getAdmin);
        return $deleteAdminBakery;
    }
    public function deleteAdminPastry($id){
        //recup ce qu'on a besoin
        $id= array($_GET['id']);
        $query = $this->pdo->prepare
    (
        'DELETE 
        FROM pastry_gallery 
        WHERE id_pastry = ?', [$id]
    );

        //;
        $query->execute($id);
        $deleteAdminPastry = $query->fetchAll(PDO::FETCH_ASSOC);
        //var_dump($getAdmin);
        return $deleteAdminPastry;
    }
    public function deleteAdminPastryClass($id){
        //recup ce qu'on a besoin
        $id= array($_GET['id']);
        $query = $this->pdo->prepare
    (
        'DELETE 
        FROM pastryclass_gallery 
        WHERE id_pastryClass = ?', [$id]
    );

        //;
        $query->execute($id);
        $deleteAdminPastryClass = $query->fetchAll(PDO::FETCH_ASSOC);
        //var_dump($getAdmin);
        return $deleteAdminPastryClass;
    }
    public function deleteAdminReviews($id){
        //recup ce qu'on a besoin
        $id= array($_GET['id']);
        $query = $this->pdo->prepare
    (
        'DELETE 
        FROM reviews 
        WHERE id_reviews = ?', [$id]
    );

        //;
        $query->execute($id);
        $deleteAdminReviews = $query->fetchAll(PDO::FETCH_ASSOC);
        //var_dump($getAdmin);
        return $deleteAdminReviews;
    }
    public function deleteAdminContact($id){
        //recup ce qu'on a besoin
        $id= array($_GET['id']);
        $query = $this->pdo->prepare
    (
        'DELETE 
        FROM contact 
        WHERE id_contact = ?', [$id]
    );

        //;
        $query->execute($id);
        $deleteAdminContact = $query->fetchAll(PDO::FETCH_ASSOC);
        //var_dump($getAdmin);
        return $deleteAdminContact;
    }
   
   
}


?>