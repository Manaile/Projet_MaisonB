<?php
ini_set('display_errors','1');
ini_set('display_startup_errors','1');
error_reporting(E_ALL);

require '../model/PastryModel.php';

class PastryController{
    private $PastryModel;

    public function __construct(){
        $this->PastryModel = new PastryModel();
    }

    public function showPastryImg(){
       return $this->PastryModel->getPastryImg();
        //var_dump($blop);
    }
}
$template = 'pastry';
?>