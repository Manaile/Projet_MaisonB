<?php
ini_set('display_errors','1');
ini_set('display_startup_errors','1');
error_reporting(E_ALL);

require_once '../database/Database.php';

class LoginModel extends Database{
    public function __construct(){
        parent::__construct();
    }
    public function logAdmin(){
        
        //envoyer ce qu'on a besoin
        if(!empty($_POST)){
            $email= $_POST['email'];

            $query = $this->pdo->prepare
        (
            'SELECT email,
                    password,
                    name
             FROM admin 
             WHERE email = ?
             '
        );
        
        $query->execute( array($_POST['email']));
    
        $logAdmin = $query->fetchAll(PDO::FETCH_ASSOC);
        var_dump($logAdmin);

        if( isset($logAdmin['password']) === "maisonb") {

            header('Location: index.php?action=bakery');

        }else if (isset($logAdmin['email']) != array($_POST['email'])){
            
            return  "erreur de connexion";
        }else if (isset($logAdmin['password']) != array($_POST['password'])){
            
            return  "erreur de connexion";
        } 
        
    }
    
}
}

?>