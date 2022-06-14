<?php
                                        /*CONTROLLER DU CREATE POUR LE CRUD */
ini_set('display_errors','1');
ini_set('display_startup_errors','1');
error_reporting(E_ALL);

/*recupere notre petit CreateModel*/
require '../model/CreateModel.php';

class CreateController{
    private $CreateModel;

    public function __construct(){
        $this->CreateModel = new CreateModel();;//on instancie la class
    }

    public function getAdmin(){
       return $this->CreateModel->sendAdmin();//on instancie la méthode pour la table admin
    }
    public function getAdminTeam(){
        return $this->CreateModel->sendAdminTeam();//on instancie la méthode pour la table equipe
     }
     public function getAdminBakery(){
        return $this->CreateModel->sendAdminBakery();//on instancie la méthode pour la table boulangerie
     }
     public function getAdminPastry(){
        return $this->CreateModel->sendAdminPastry();//on instancie la méthode pour la table patisserie
     }
     public function getAdminPastryClass(){
        return $this->CreateModel->sendAdminPastryClass();//on instancie la méthode pour la table atelier
     }
}

?>
