<?php
ini_set('display_errors','1');
ini_set('display_startup_errors','1');
error_reporting(E_ALL);


class error404Controller{
    private $error404;

    public function showError404(){
       return $this->error404;
        //var_dump($blop);
    }
}
$template = 'error404';
?>