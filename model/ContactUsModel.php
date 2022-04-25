<?php
ini_set('display_errors','1');
ini_set('display_startup_errors','1');
error_reporting(E_ALL);

require_once '../database/Database.php';

class ContactUsModel extends Database{
    public function __construct(){
        parent::__construct();
    }
    public function sendContactUs(){
        //envoyer ce qu'on a besoin
        if(!empty($_POST) && $_POST['choice']=="2"){
            $query = $this->pdo->prepare(
            '
                INSERT INTO
                contact
                (name, phone, mail, message)
                VALUES
                (?, ?, ?, ?)
            '
        );

        $query ->execute(
            [$_POST['name'], 
            $_POST['phone'], 
            $_POST['mail'], 
            $_POST['message']]);
        $send = $query->fetch(PDO::FETCH_ASSOC);
        return $send;
        //var_dump($send);
    }
    else if(!empty($_POST) && $_POST['choice']=="1"){
        $query = $this->pdo->prepare(
            '
                INSERT INTO
                reviews
                (name, phone, mail, message)
                VALUES
                (?, ?, ?, ?)
            '
        );

        $query ->execute(
            [$_POST['name'], 
            $_POST['phone'], 
            $_POST['mail'], 
            $_POST['message']]);
        $send = $query->fetch(PDO::FETCH_ASSOC);
        return $send;
    }
    else{
        //choisir un objet
        echo "choisir un objet";
    }
    }
   
}

?>