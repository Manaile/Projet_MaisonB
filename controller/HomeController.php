<?php
ini_set('display_errors','1');
ini_set('display_startup_errors','1');
error_reporting(E_ALL);

require '../model/HomeModel.php';

class HomeController{
    private $HomeModel;
    //public $template;

    public function __construct(){
        $this->HomeModel = new HomeModel();
    }

    public function showReviews(){
       return $this->HomeModel->getReviews();
        //var_dump($blop);
    }
}
$template = 'home';
?>