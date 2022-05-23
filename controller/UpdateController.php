<?php
ini_set('display_errors','1');
ini_set('display_startup_errors','1');
error_reporting(E_ALL);



require '../model/UpdateModel.php';

class UpdateController{
    private $UpdateModel;

    public function __construct(){
        $this->UpdateModel = new UpdateModel();
    }

    public function updateAdminController($id,$name,$email,$password){
        $this->UpdateModel->UpdateAdmin($id,$name,$email,$password);
        //var_dump($id,$name,$email,$password);
    }
}

?>
