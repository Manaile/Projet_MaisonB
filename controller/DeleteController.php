<?php
ini_set('display_errors','1');
ini_set('display_startup_errors','1');
error_reporting(E_ALL);



require '../model/DeleteModel.php';

class DeleteController{
    private $GetModel;

    public function __construct(){
        $this->DeleteModel = new DeleteModel();
    }

    public function deleteAdminController($id){
       return $this->DeleteModel->deleteAdmin($id);
        //var_dump($blop);
    }
    public function deleteAdminTeamController($id){
        return $this->DeleteModel->deleteAdminTeam($id);
         //var_dump($blop);
     }
     public function deleteAdminBakeryController($id){
        return $this->DeleteModel->deleteAdminBakery($id);
         //var_dump($blop);
     }
     public function deleteAdminPastryController($id){
        return $this->DeleteModel->deleteAdminPastry($id);
         //var_dump($blop);
     }
     public function deleteAdminPastryClassController($id){
        return $this->DeleteModel->deleteAdminPastryClass($id);
         //var_dump($blop);
     }
     public function deleteAdminReviewsController($id){
        return $this->DeleteModel->deleteAdminReviews($id);
         //var_dump($blop);
     }
     public function deleteAdminContactController($id){
        return $this->DeleteModel->deleteAdminContact($id);
         //var_dump($blop);
     }
}

?>
