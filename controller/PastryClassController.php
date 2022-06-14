<?php
                                            /*CONTROLLER DE LA PAGE 'CONTACT'*/
ini_set('display_errors','1');
ini_set('display_startup_errors','1');
error_reporting(E_ALL);

/*recupere notre petit PastryClassModel*/
require '../model/PastryClassModel.php';

class PastryClassController{
    private $PastryClassModel;

    public function __construct(){
        $this->PastryClassModel = new PastryClassModel();//on instancie la class
    }

    public function showPastryClassCard(){
       return $this->PastryClassModel->getPastryClassCard(); //on instancie la méthode
    }
}
?>