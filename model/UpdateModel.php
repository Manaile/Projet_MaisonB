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
   
}

?>