<?php
                                            /*CONTROLLER DE LA PAGE 'CONTACT'*/
ini_set('display_errors','1');
ini_set('display_startup_errors','1');
error_reporting(E_ALL);

/*recupere notre petit HomeModel*/
require './model/HomeModel.php';

class HomeController{
    private $HomeModel;
    //public $template;

    public function __construct(){
        $this->HomeModel = new HomeModel();//on instancie la class
    }

    public function showReviews(){
       return $this->HomeModel->getReviews(); //on instancie la méthode
    }
}
?>