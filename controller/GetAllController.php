<?php
                                        /*CONTROLLER DU READ POUR LE CRUD */
ini_set('display_errors','1');
ini_set('display_startup_errors','1');
error_reporting(E_ALL);

/*recupere notre GetAllModel*/
require './model/GetAllModel.php';

class GetAllController{
    private $GetAllModel;

    public function __construct(){
        $this->GetAllModel = new GetAllModel();//on instancie la class
    }
    public function showAllAdmin(){
       return $this->GetAllModel->getAllAdmin();//on instancie la méthode pour la table admin
    }
    public function showAllAbout(){
        return $this->GetAllModel->getAllAbout();//on instancie la méthode pour la table l'quipe maisonb
     }
     public function showAllBakery(){
        return $this->GetAllModel->getAllBakery();//on instancie la méthode pour la table boulangerie
     }
     public function showAllPastry(){
        return $this->GetAllModel->getAllPastry();//on instancie la méthode pour la table patisserie
     }
     public function showAllClass(){
        return $this->GetAllModel->getAllClass();//on instancie la méthode pour la table atelier
     }
     public function showAllReviews(){
        return $this->GetAllModel->getAllReviews();//on instancie la méthode pour la table avis
     }
     public function showAllContact(){
        return $this->GetAllModel->getAllContact();//on instancie la méthode pour la table message
     }
}
?>