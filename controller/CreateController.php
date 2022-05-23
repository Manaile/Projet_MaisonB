<?php
ini_set('display_errors','1');
ini_set('display_startup_errors','1');
error_reporting(E_ALL);

require '../model/CreateModel.php';

class CreateController{
    private $CreateModel;

    public function __construct(){
        $this->CreateModel = new CreateModel();
    }

    public function getAdmin(){
       return $this->CreateModel->sendAdmin();
        //var_dump($blop);
    }
    public function getAdminTeam(){
        return $this->CreateModel->sendAdminTeam();
         //var_dump($blop);
     }
     public function getAdminBakery(){
        return $this->CreateModel->sendAdminBakery();
         //var_dump($blop);
     }
     public function getAdminPastry(){
        return $this->CreateModel->sendAdminPastry();
         //var_dump($blop);
     }
     public function getAdminPastryClass(){
        return $this->CreateModel->sendAdminPastryClass();
         //var_dump($blop);
     }
}

?>
