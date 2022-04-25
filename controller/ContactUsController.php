<?php
ini_set('display_errors','1');
ini_set('display_startup_errors','1');
error_reporting(E_ALL);

require '../model/ContactUsModel.php';

class ContactUsController{
    private $ContactUsModel;

    public function __construct(){
        $this->ContactUsModel = new ContactUsModel();
    }

    public function getContactUs(){
       return $this->ContactUsModel->sendContactUs();
        //var_dump($blop);
    }
}
$template = 'contactUs';

?>
