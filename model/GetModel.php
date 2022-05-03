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
        $id= $_GET['id_admin'];
        $query = $this->pdo->prepare
    (
        'SELECT id_admin,
                name,
                email,
                password
        FROM admin 
        WHERE id_admin = ? '
    );

        $query->execute([$id]);
        $getAdmin = $query->fetch(PDO::FETCH_ASSOC);
        var_dump($getAdmin);
        return $getAdmin;
    }
   
}

?>