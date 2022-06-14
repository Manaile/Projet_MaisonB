<?php
                                            /*CONTROLLER DE LA FONCTION 'DECONNECTION'*/
ini_set('display_errors','1');
ini_set('display_startup_errors','1');
error_reporting(E_ALL);

class LogoutController{
    private $logout;

    public function getlogout(){ 
        session_destroy();//detruire la session pour proteger notre merveilleux site
       return $this->logout;
    }
}
?>