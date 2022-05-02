<?php
ini_set('display_errors','1');
ini_set('display_startup_errors','1');
error_reporting(E_ALL);

require '../model/AdminModel.php';

class AdminController{
    private $AdminModel;
    //public $template;

    public function __construct(){
        $this->AdminModel = new AdminModel();
    }
    public function showAdmin(){
       return $this->AdminModel->getAdmin();
        //var_dump($blop);
    }
    public function showAbout(){
        return $this->AdminModel->getAbout();
         //var_dump($blop);
     }
     public function showBakery(){
        return $this->AdminModel->getBakery();
         //var_dump($blop);
     }
     public function showPastry(){
        return $this->AdminModel->getPastry();
         //var_dump($blop);
     }
     public function showClass(){
        return $this->AdminModel->getClass();
         //var_dump($blop);
     }
     public function showReviews(){
        return $this->AdminModel->getReviews();
         //var_dump($blop);
     }
     public function showContact(){
        return $this->AdminModel->getContact();
         //var_dump($blop);
     }
}

?>

?>