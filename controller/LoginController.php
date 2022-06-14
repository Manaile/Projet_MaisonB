<?php
                                            /*CONTROLLER DE LA PAGE 'LOGIN'*/
ini_set('display_errors','1');
ini_set('display_startup_errors','1');
error_reporting(E_ALL);

/*recupere notre LoginModel*/
require '../model/LoginModel.php';

class LoginController{
    private $LoginModel;

    public function __construct(){
        $this->LoginModel = new LoginModel();//on instancie la class
    }

    public function logAdmin(){
       return $this->LoginModel->logAdmin(); //on instancie la méthode
    }
}

?>
