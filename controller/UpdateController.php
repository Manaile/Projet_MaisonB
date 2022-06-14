<?php
                                        /*CONTROLLER DU UPDATE POUR LE CRUD */
ini_set('display_errors','1');
ini_set('display_startup_errors','1');
error_reporting(E_ALL);

/*recupere notre petit UpdateModel*/
require '../model/UpdateModel.php';

class UpdateController{
    private $UpdateModel;

    public function __construct(){
        $this->UpdateModel = new UpdateModel();//on instancie la class
    }

    public function updateAdminController($id,$name,$email,$password){//on instancie la méthode pour la table admin
        $this->UpdateModel->UpdateAdmin($id,$name,$email,$password);
    }
    public function updateAdminTeamController($id,$url,$name,$post,$description){//on instancie la méthode pour la table equipe
        $this->UpdateModel->UpdateAdminTeam($id,$url,$name,$post,$description);
    }
    public function updateAdminBakeryController($id,$url,$description){//on instancie la méthode pour la table boulangerie
        $this->UpdateModel->UpdateAdminBakery($id,$url,$description);
    }
    public function updateAdminPastryController($id,$url,$description){//on instancie la méthode pour la table patisserie
        $this->UpdateModel->UpdateAdminPastry($id,$url,$description);
    }
    public function updateAdminPastryClassController($id,$url,$description,$name,$date,$price){//on instancie la méthode pour la table atelier
        $this->UpdateModel->UpdateAdminPastryClass($id,$url,$description,$name,$date,$price);
    }
}
?>
