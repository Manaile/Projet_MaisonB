<?php
                                        /* MODEL DE LA PAGE 'LOGIN' */
ini_set('display_errors','1');
ini_set('display_startup_errors','1');
error_reporting(E_ALL);

//recuperation de la bdd
require_once '../database/Database.php';

class LoginModel extends Database{
    public function __construct(){
        parent::__construct();
    }
    public function logAdmin(){
        
       //une sublime requête pour verifier si le mail et le mot de pass exist
       //avec le select on recupere ce qu'il y a dans la bdd
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
        
        if($logAdmin && [$logAdmin['email']] === [$_POST['email']]){ //premiere filtre avec le mail check
            if(password_verify($_POST['password'], $logAdmin['password'])){ //second filtre pour verifier si le mot de pass est correct
                $_SESSION['name'] = $logAdmin['name'];
                $_SESSION['password'] = $logAdmin['password'];
                $_SESSION['email'] = $logAdmin['email'];
                header('Location: index.php?action=homeAdmin'); //redirection vers la page d'accueil du coté admin, le coté VIP
            }
            else{
                return  "erreur de connexion"; //si le password est mauvais... biiiip message d'erreur c'est raté ! try again
            }
        }else {
            return  "erreur de connexion"; //si le mail est mauvais... biiiip message d'erreur c'est raté ! try again
        }
        
    }
}
}

?>