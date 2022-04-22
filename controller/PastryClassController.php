<?php
ini_set('display_errors','1');
ini_set('display_startup_errors','1');
error_reporting(E_ALL);

require '../model/PastryClassModel.php';

class PastryClassController{
    private $PastryClassModel;

    public function __construct(){
        $this->PastryClassModel = new PastryClassModel();
    }

    public function showPastryClassCard(){
       return $this->PastryClassModel->getPastryClassCard();
        //var_dump($blop);
    }
}
$template = 'pastryClass';
?>