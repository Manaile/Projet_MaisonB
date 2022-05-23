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
}

?>
