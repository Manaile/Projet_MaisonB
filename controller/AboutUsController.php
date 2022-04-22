<?php
ini_set('display_errors','1');
ini_set('display_startup_errors','1');
error_reporting(E_ALL);

require '../model/AboutUsModel.php';

class AboutUsController{
    private $PastryModel;

    public function __construct(){
        $this->AboutUsModel = new AboutUsModel();
    }

    public function showAboutUsImg(){
       return $this->AboutUsModel->getAboutUsImg();
        //var_dump($blop);
    }
}
$template = 'aboutUs';
?>