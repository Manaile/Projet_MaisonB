<?php
                                            /*CONTROLLER DE LA PAGE 'PATISSERIE'*/
ini_set('display_errors','1');
ini_set('display_startup_errors','1');
error_reporting(E_ALL);

/*recupere notre petit PastryClassModel*/
require '../model/PastryModel.php';

class PastryController{
    private $PastryModel;

    public function __construct(){
        $this->PastryModel = new PastryModel();//on instancie la class
    }

    public function showPastryImg(){
       return $this->PastryModel->getPastryImg(); //on instancie la méthode
    }
}
?>