<?php
ini_set('display_errors','1');
ini_set('display_startup_errors','1');
error_reporting(E_ALL);

require '../model/BakeryModel.php';

class BakeryController{
    private $BakeryModel;

    public function __construct(){
        $this->BakeryModel = new BakeryModel();
    }

    public function showBakeryImg(){
       return $this->BakeryModel->getBakeryImg();
        //var_dump($blop);
    }
}
$template = 'bakery';
?>