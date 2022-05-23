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
    public function updateAdminTeamController($id,$url,$name,$post,$description){
        $this->UpdateModel->UpdateAdminTeam($id,$url,$name,$post,$description);
        //var_dump($id,$url,$name,$post,$description);
    }
    public function updateAdminBakeryController($id,$url,$description){
        $this->UpdateModel->UpdateAdminBakery($id,$url,$description);
        //var_dump($id,$url,$name,$post,$description);
    }
    public function updateAdminPastryController($id,$url,$description){
        $this->UpdateModel->UpdateAdminPastry($id,$url,$description);
        //var_dump($id,$url,$name,$post,$description);
    }
    public function updateAdminPastryClassController($id,$url,$description,$name,$date,$price){
        $this->UpdateModel->UpdateAdminPastryClass($id,$url,$description,$name,$date,$price);
        //var_dump($id,$url,$name,$post,$description);
    }
}

?>
