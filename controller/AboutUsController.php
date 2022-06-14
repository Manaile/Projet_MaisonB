<?php
                                            /*CONTROLLER DE PAGE 'QUI SOMMES NOUS'*/
ini_set('display_errors','1');
ini_set('display_startup_errors','1');
error_reporting(E_ALL);

/*recupere notre petit AboutUsModel*/
require '../model/AboutUsModel.php';

class AboutUsController{
    private $PastryModel;

    public function __construct(){
        $this->AboutUsModel = new AboutUsModel(); //on instancie la class
    }

    public function showAboutUsImg(): array{
       return $this->AboutUsModel->getAboutUsImg(); //on instancie la méthode
    }
}
?>