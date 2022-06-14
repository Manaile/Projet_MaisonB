<?php
                                            /*CONTROLLER DE LA PAGE 'CONTACT'*/
ini_set('display_errors','1');
ini_set('display_startup_errors','1');
error_reporting(E_ALL);

/*recupere notre petit ContactUsModel*/
require '../model/ContactUsModel.php';

class ContactUsController{
    private $ContactUsModel;

    public function __construct(){
        $this->ContactUsModel = new ContactUsModel();//on instancie la class
    }

    public function getContactUs(){
       return $this->ContactUsModel->sendContactUs(); //on instancie la méthode
    }
}

?>
