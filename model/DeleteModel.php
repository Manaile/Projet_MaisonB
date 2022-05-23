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
   
}


?>