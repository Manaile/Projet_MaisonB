<?php
                                            /*CONTROLLER DE PAGE 'BOULANGERIE'*/
ini_set('display_errors','1');
ini_set('display_startup_errors','1');
error_reporting(E_ALL);

/*recupere notre petit BakeryModel*/
require '../model/BakeryModel.php';

class BakeryController{
    private $BakeryModel;

    public function __construct(){
        $this->BakeryModel = new BakeryModel(); //on instancie la class
    }

    public function showBakeryImg(){
       return $this->BakeryModel->getBakeryImg(); //on instancie la méthode
    }
}
?>