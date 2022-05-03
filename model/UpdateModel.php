<?php
ini_set('display_errors','1');
ini_set('display_startup_errors','1');
ini_set('memory_limit', '2048M');
error_reporting(E_ALL);

require_once '../database/Database.php';

class UpdateModel extends Database{
    public function __construct(){
        parent::__construct();
    }
    public function UpdateAdmin(){
        //recup ce qu'on a besoin
        $query = $this->pdo->prepare
    (
    'UPDATE admin SET 
    WHERE id_admin=? '
        );

        $query->execute();
        $getAdmin = $query->fetchAll(PDO::FETCH_ASSOC);
        //var_dump($get);
        return $getAdmin;
    }
   
}

?>