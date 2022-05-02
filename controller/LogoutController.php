<?php
ini_set('display_errors','1');
ini_set('display_startup_errors','1');
error_reporting(E_ALL);


class LogoutController{
    private $logout;

    public function getlogout(){
       return $this->logout;
        //var_dump($blop);
    }
}
?>