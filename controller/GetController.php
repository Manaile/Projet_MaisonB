<?php
                                        /*CONTROLLER DU GET POUR LE CRUD */
ini_set('display_errors','1');
ini_set('display_startup_errors','1');
error_reporting(E_ALL);

/*recupere notre petit GetModel*/
require './model/GetModel.php';

class GetController{
    private $GetModel;

    public function __construct(){
        $this->GetModel = new GetModel();//on instancie la class
    }

    public function getAdminController($id){
       return $this->GetModel->getAdmin($id);//on instancie la méthode pour la table admin
    }
    public function getAdminTeamController($id){
        return $this->GetModel->getAdminTeam($id);//on instancie la méthode pour la table l'quipe maisonb
     }
     public function getAdminBakeryController($id){
        return $this->GetModel->getAdminBakery($id);//on instancie la méthode pour la table boulangerie
     }
     public function getAdminPastryController($id){
        return $this->GetModel->getAdminPastry($id);//on instancie la méthode pour la table patisserie
     }
     public function getAdminPastryClassController($id){
        return $this->GetModel->getAdminPastryClass($id);//on instancie la méthode pour la table atelier
     }
}

?>
