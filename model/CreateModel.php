<?php
ini_set('display_errors','1');
ini_set('display_startup_errors','1');
error_reporting(E_ALL);

require_once '../database/Database.php';

class CreateModel extends Database{
    public function __construct(){
        parent::__construct();
    }
    public function sendAdmin(){
        //envoyer ce qu'on a besoin
            $query = $this->pdo->prepare(
            '
                INSERT INTO
                admin
                (id_admin, name, email, password)
                VALUES
                (?, ?, ?, ?)
            '
        );

        $query ->execute(
            [$_POST['id'], 
            $_POST['name'], 
            $_POST['mail'], 
            $_POST['password']]);
        $send = $query->fetch(PDO::FETCH_ASSOC);
        return $send;
        //var_dump($send);
    }
}

?>