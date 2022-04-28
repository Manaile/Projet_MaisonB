<?php
ini_set('display_errors','1');
ini_set('display_startup_errors','1');
error_reporting(E_ALL);

require '../model/LoginModel.php';

class LoginController{
    private $LoginModel;

    public function __construct(){
        $this->LoginModel = new LoginModel();
    }

    public function logAdmin(){
       return $this->LoginModel->logAdmin();
        //var_dump($blop);
    }
}
$template = 'login';

?>
