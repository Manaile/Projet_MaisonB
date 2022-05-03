<?php
ini_set('display_errors','1');
ini_set('display_startup_errors','1');
error_reporting(E_ALL);



require '../model/GetModel.php';

class GetController{
    private $GetModel;

    public function __construct(){
        $this->GetModel = new GetModel();
    }

    public function getAdminController($id){
       return $this->GetModel->getAdmin($id);
        //var_dump($blop);
    }
}

?>
