<?php
ini_set('display_errors','1');
ini_set('display_startup_errors','1');
error_reporting(E_ALL);

require '../model/GetAllModel.php';

class GetAllController{
    private $GetAllModel;
    //public $template;

    public function __construct(){
        $this->GetAllModel = new GetAllModel();
    }
    public function showAllAdmin(){
       return $this->GetAllModel->getAllAdmin();
        //var_dump($blop);
    }
    public function showAllAbout(){
        return $this->GetAllModel->getAllAbout();
         //var_dump($blop);
     }
     public function showAllBakery(){
        return $this->GetAllModel->getAllBakery();
         //var_dump($blop);
     }
     public function showAllPastry(){
        return $this->GetAllModel->getAllPastry();
         //var_dump($blop);
     }
     public function showAllClass(){
        return $this->GetAllModel->getAllClass();
         //var_dump($blop);
     }
     public function showAllReviews(){
        return $this->GetAllModel->getAllReviews();
         //var_dump($blop);
     }
     public function showAllContact(){
        return $this->GetAllModel->getAllContact();
         //var_dump($blop);
     }
}

?>

?>