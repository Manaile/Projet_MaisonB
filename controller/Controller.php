<?php
ini_set('display_errors','1');
ini_set('display_startup_errors','1');
error_reporting(E_ALL);

require './model/Model.php';

class Controller{
    public $Model;

    public function __construct(){
        $this->Model = new Model();
    }

    public function review(){
        return $this->Model->reviews;
    }
    
}

$template = 'home';
?>