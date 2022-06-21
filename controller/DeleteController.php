<?php
                                        /*CONTROLLER DU DELETE POUR LE CRUD */
ini_set('display_errors','1');
ini_set('display_startup_errors','1');
error_reporting(E_ALL);

/*recupere notre petit DeleteModel*/
require './model/DeleteModel.php';

class DeleteController{
    private $GetModel;

    public function __construct(){
        $this->DeleteModel = new DeleteModel();//on instancie la class
    }

    public function deleteAdminController($id){//on instancie la méthode pour la table admin
       return $this->DeleteModel->deleteAdmin($id);
        //var_dump($blop);
    }
    public function deleteAdminTeamController($id){//on instancie la méthode pour la table equipe
        return $this->DeleteModel->deleteAdminTeam($id);
         //var_dump($blop);
     }
     public function deleteAdminBakeryController($id){//on instancie la méthode pour la table boulangerie
        return $this->DeleteModel->deleteAdminBakery($id);
         //var_dump($blop);
     }
     public function deleteAdminPastryController($id){//on instancie la méthode pour la table patisserie
        return $this->DeleteModel->deleteAdminPastry($id);
         //var_dump($blop);
     }
     public function deleteAdminPastryClassController($id){//on instancie la méthode pour la table atelier
        return $this->DeleteModel->deleteAdminPastryClass($id);
         //var_dump($blop);
     }
     public function deleteAdminReviewsController($id){//on instancie la méthode pour la table avis
        return $this->DeleteModel->deleteAdminReviews($id);
         //var_dump($blop);
     }
     public function deleteAdminContactController($id){//on instancie la méthode pour la table message
        return $this->DeleteModel->deleteAdminContact($id);
         //var_dump($blop);
     }
}

?>
