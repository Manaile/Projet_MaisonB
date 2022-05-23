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
    public function getAdminTeamController($id){
        return $this->GetModel->getAdminTeam($id);
         //var_dump($blop);
     }
     public function getAdminBakeryController($id){
        return $this->GetModel->getAdminBakery($id);
         //var_dump($blop);
     }
     public function getAdminPastryController($id){
        return $this->GetModel->getAdminPastry($id);
         //var_dump($blop);
     }
     public function getAdminPastryClassController($id){
        return $this->GetModel->getAdminPastryClass($id);
         //var_dump($blop);
     }
}

?>
