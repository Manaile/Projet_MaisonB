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
        
       // envoyer ce qu'on a besoin
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
        
        $query->execute([$_POST['email']]);
    
        $logAdmin = $query->fetch(PDO::FETCH_ASSOC);
        
        if($logAdmin && [$logAdmin['email']] === [$_POST['email']]){
            if(password_verify($_POST['password'], $logAdmin['password'])){
                $_SESSION['name'] = $logAdmin['name'];
                $_SESSION['password'] = $logAdmin['password'];
                $_SESSION['email'] = $logAdmin['email'];
                header('Location: index.php?action=homeAdmin');
            }
            else{
                return  "erreur de connexion";
            }
        }else {
            return  "erreur de connexion";
        }
        
    }
}
}

?>