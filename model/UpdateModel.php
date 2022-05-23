<?php
ini_set('display_errors','1');
ini_set('display_startup_errors','1');
error_reporting(E_ALL);

require_once '../database/Database.php';

class UpdateModel extends Database{
    public function __construct(){
        parent::__construct();
    }
    public function UpdateAdmin($id,$name,$email,$password){
        //recup ce qu'on a besoin
        $query = $this->pdo->prepare
    (
    "UPDATE admin 
    SET name = '$name',
        email= '$email',
        password = '$password'
    WHERE id_admin='$id'"
        );

        $query->execute();
        var_dump($query);
        $updateAdmin = $query->fetchAll(PDO::FETCH_ASSOC);
        return $updateAdmin;
    }
    public function UpdateAdminTeam($id,$url,$name,$post,$description){
        
        //recup ce qu'on a besoin
       
        $query = $this->pdo->prepare
    (
    "UPDATE about_gallery 
    SET url_about= '$url',
        name_about = '$name',
        profession_about = '$post',
        description_about = '$description'
    WHERE id_about='$id'"
        );

        $query->execute();
        $updateAdminTeam = $query->fetchAll(PDO::FETCH_ASSOC);
        return $updateAdminTeam;
    }
    public function UpdateAdminBakery($id,$url,$description){
        
        //recup ce qu'on a besoin
       
        $query = $this->pdo->prepare
    (
    "UPDATE bakery_gallery 
    SET url_bakery= '$url',
        description_bakery = '$description'
    WHERE id_bakery='$id'"
        );

        $query->execute();
        $updateAdminBakery = $query->fetchAll(PDO::FETCH_ASSOC);
        return $updateAdminBakery;
    }
    public function UpdateAdminPastry($id,$url,$description){
        
        //recup ce qu'on a besoin
       
        $query = $this->pdo->prepare
    (
    "UPDATE pastry_gallery 
    SET url_pastry= '$url',
        description_pastry = '$description'
    WHERE id_pastry='$id'"
        );

        $query->execute();
        $updateAdminPastry = $query->fetchAll(PDO::FETCH_ASSOC);
        return $updateAdminPastry;
    }
    public function UpdateAdminPastryClass($id,$url,$description,$name,$date,$price){
        
        //recup ce qu'on a besoin
       
        $query = $this->pdo->prepare
    (
    "UPDATE pastryclass_gallery 
    SET url_pastryClass= '$url',
        description_pastryClass = '$description',
        name_pastryClass= '$name',
        date_pastryClass = '$date',
        price_pastryClass = '$price'
    WHERE id_pastryClass='$id'"
        );

        $query->execute();
        $updateAdminPastryClass = $query->fetchAll(PDO::FETCH_ASSOC);
        return $updateAdminPastryClass;
    }
   
}

?>