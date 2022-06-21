<?php
                                        /* Mr le Router qui va centraliser tout ce petit beau monde et trouver le bon chemin*/
mb_internal_encoding("UTF-8");
ini_set('display_errors','1');
ini_set('display_startup_errors','1');
error_reporting(E_ALL);

   class Router{
        private $action;
        public $templates;
    
        public function getController(){
            if(isset($_GET['action'])){  //si une action est assigné, 'existe'
                $action = $_GET['action'];
                // on va gerer les differentes action avec un switch et instancier la methode correspondante
                // on va gerer la demande du client (utilistaeur)
                switch($action){
                    case 'home': //le client veut la page d'accueil
                        $HomeCont = new HomeController();//on instancie la class
                        return $HomeCont->showReviews();//on instancie la methode
                        break;

                    case 'bakery': //le client veut la page boulangerie
                        $BakeryCont = new BakeryController();//on instancie la class
                        return  $BakeryCont->showBakeryImg();//on instancie la methode
                        break;

                    case 'pastry': //le client veut la page patisserie
                        $PastryCont = new PastryController();//on instancie la class
                        return $PastryCont->showPastryImg();//on instancie la methode
                        break;
                    
                    case 'pastryClass': //le client veut la page atelier
                        $PastryClassCont = new PastryCLassController();//on instancie la class
                        return $PastryClassCont->showPastryClassCard();//on instancie la methode
                        break;

                    case 'aboutUs': //le client veut la page qui sommes nous
                        $aboutUsCont = new aboutUsController(); //on instancie la class
                        return $aboutUsCont->showaboutUsImg();//on instancie la methode
                        break;
                    
                    case 'contactUs': //le client veut la page nous contacter
                        $ContactUsCont = new ContactUsController();//on instancie la class
                        return $ContactUsCont->getContactUs();//on instancie la methode
                        break;

                    case 'legalDisclaimer': //le client veut la page mention legale
                        $legalDisclaimer = new legalDisclaimerController();//on instancie la class
                        return $legalDisclaimer->showLegalDisclaimer();//on instancie la methode
                        break;

                    case 'login': //l'admin veut la page connexion
                        $Login = new LoginController();//on instancie la class
                        return $Login->logAdmin();//on instancie la methode
                        break;

                    case 'homeAdmin': //l'admin veut la page d'accueil du coté amdin
                        $Login = new LoginController();//on instancie la class
                        return $Login->logAdmin();//on instancie la methode
                        break;       
                    
                    case 'admin'://l'admin veut la table admin
                        $GetAll = new GetAllController();//on instancie la class
                        return $GetAll->showAllAdmin();//on instancie la methode
                        break;

                    case 'adminTeam'://l'admin veut la table l'equipe
                        $GetAll = new GetAllController();//on instancie la class
                        return $GetAll->showAllAbout();//on instancie la methode
                        break;

                    case 'adminBakery'://l'admin veut la table boulangerie
                        $GetAll = new GetAllController();//on instancie la class
                        return $GetAll->showAllBakery();//on instancie la methode
                        break;

                    case 'adminPastry'://l'admin veut la table patisserie
                        $GetAll = new GetAllController();//on instancie la class
                        return $GetAll->showAllPastry();//on instancie la methode
                        break;

                    case 'adminClass'://l'admin veut la table atelier
                        $GetAll = new GetAllController();//on instancie la class
                        return $GetAll->showAllClass();//on instancie la methode
                        break;

                    case 'adminReviews'://l'admin veut la table avis
                        $GetAll = new GetAllController();//on instancie la class
                        return $GetAll->showAllReviews();//on instancie la methode
                        break;

                    case 'adminContact'://l'admin veut la table message
                        $GetAll = new GetAllController();//on instancie la class
                        return $GetAll->showAllContact();//on instancie la methode
                        break;

                    case 'logout'://l'admin veut se deconnecter
                        $out = new LogoutController();//on instancie la class
                        return $out->getlogout();//on instancie la methode
                        break;

                    case 'get':// si on récupère l'id sélectionné dans l'url alors on lance la méthode qui va ensuite gerer la modif de admin
                        $control = new GetController();//on instancie la class
                        $id= $_GET['id'];
                        return $control->getAdminController($id);//on instancie la methode
                        break;
                        
                    case 'update'://admin veut modifier un admin
                        $update = new UpdateController();//on instancie la class
                        $id= $_POST['id'];
                        $name = $_POST['name'];
                        $email = $_POST['mail'];
                        $password = $_POST['password'];
                        return $update->updateAdminController($id,$name,$email,$password);//on instancie la methode
                        break;

                    case 'create'://admin veut creer un nouveau admin
                        $CreateNewAdmin = new CreateController();//on instancie la class
                        return $CreateNewAdmin->getAdmin();//on instancie la methode
                        break;
                    
                    case 'delete'://admin veut supprimer un admin
                        $delete = new DeleteController();//on instancie la class
                        $id= $_GET['id'];
                        return $delete->deleteAdminController($id);//on instancie la methode
                        break;
                    
                    case 'getTeam':// si on récupère l'id sélectionné dans l'url alors on lance la méthode qui va ensuite gerer la modif de l'equipe
                        $controlTeam = new GetController();//on instancie la class
                        $id= $_GET['id'];
                        return $controlTeam->getAdminTeamController($id);//on instancie la methode
                        break;

                    case 'updateTeam'://admin veut modifier une personne de la team
                        $updateTeam = new UpdateController();//on instancie la class
                        $id= $_POST['id'];
                        $name = $_POST['name'];
                        $post = $_POST['profession'];
                        $url = $_POST['picture'];
                        $description = $_POST['description'];
                        return $updateTeam->updateAdminTeamController($id,$url,$name,$post,$description);//on instancie la methode
                        break;

                    case 'createTeam'://admin veut creer un nouveau membre de l'equipe
                        $CreateNewAdminTeam = new CreateController();//on instancie la class
                        return $CreateNewAdminTeam->getAdminTeam();//on instancie la methode
                        break;

                    case 'deleteTeam'://admin veut supprimer une personne de l'equipe
                        $deleteTeam = new DeleteController();//on instancie la class
                        $id= $_GET['id'];
                        return $deleteTeam->deleteAdminTeamController($id);//on instancie la methode
                        break;

                    case 'getBakery':// si on récupère l'id sélectionné dans l'url alors on lance la méthode qui va ensuite gerer la modif de la boulangerie
                        $controlBakery = new GetController();//on instancie la class
                        $id= $_GET['id'];
                        return $controlBakery->getAdminBakeryController($id);//on instancie la methode
                        break;

                    case 'updateBakery'://admin veut modifier une boulangerie
                        $updateBakery = new UpdateController();//on instancie la class
                        $id= $_POST['id'];
                        $url = $_POST['picture'];
                        $description = $_POST['description'];
                        return $updateBakery->updateAdminBakeryController($id,$url,$description);//on instancie la methode
                        break;

                    case 'createBakery'://admin veut creer une nouvelle creation boulangerie
                        $CreateNewAdminBakery = new CreateController();//on instancie la class
                        return $CreateNewAdminBakery->getAdminBakery();//on instancie la methode
                        break;

                    case 'deleteBakery'://admin veut supprimer une boulangerie
                        $deleteBakery = new DeleteController();//on instancie la class
                        $id= $_GET['id'];
                        return $deleteBakery->deleteAdminBakeryController($id);//on instancie la methode
                        break;

                    case 'getPastry':// si on récupère l'id sélectionné dans l'url alors on lance la méthode qui va ensuite gerer la modif de la patisserie
                        $controlPastry = new GetController();//on instancie la class
                        $id= $_GET['id'];
                        return $controlPastry->getAdminPastryController($id);//on instancie la methode
                        break;

                    case 'updatePastry'://admin veut modifier une patisserie
                        $updatePastry = new UpdateController();//on instancie la class
                        $id= $_POST['id'];
                        $url = $_POST['picture'];
                        $description = $_POST['description'];
                        return $updatePastry->updateAdminPastryController($id,$url,$description);//on instancie la methode
                        break;
    
                    case 'createPastry'://admin veut creer une nouvelle creation patisserie
                        $CreateNewAdminPastry = new CreateController();//on instancie la class
                        return $CreateNewAdminPastry->getAdminPastry();//on instancie la methode
                        break;

                    case 'deletePastry'://admin veut supprimer une patisserie
                        $deletePastry = new DeleteController();//on instancie la class
                        $id= $_GET['id'];
                        return $deletePastry->deleteAdminPastryController($id);//on instancie la methode
                        break;

                    case 'getPastryClass':// si on récupère l'id sélectionné dans l'url alors on lance la méthode qui va ensuite gerer la modif de l'atelier'
                        $controlPastryClass = new GetController();//on instancie la class
                        $id= $_GET['id'];
                        return $controlPastryClass->getAdminPastryClassController($id);//on instancie la methode
                        break;

                    case 'updatePastryClass'://admin veut modifier un atelier
                        $updatePastryClass = new UpdateController();//on instancie la class
                        $id= $_POST['id'];
                        $url = $_POST['picture'];
                        $description = $_POST['description'];
                        $name= $_POST['name'];
                        $date = $_POST['date'];
                        $price = $_POST['price'];
                        return $updatePastryClass->updateAdminPastryClassController($id,$url,$description, $name, $date, $price);//on instancie la methode
                        break;

                    case 'createPastryClass'://admin veut creer un nouveau atelier
                            $CreateNewAdminPastryClass = new CreateController();//on instancie la class
                            return $CreateNewAdminPastryClass->getAdminPastryClass();//on instancie la methode
                            break;

                    case 'deletePastryClass'://admin veut supprimer un atelier
                        $deletePastryClass = new DeleteController();//on instancie la class
                        $id= $_GET['id'];
                        return $deletePastryClass->deleteAdminPastryClassController($id);//on instancie la methode
                        break;

                    case 'deleteReviews'://admin veut supprimer un avis
                        $deleteReviews = new DeleteController();//on instancie la class
                        $id= $_GET['id'];
                        return $deleteReviews->deleteAdminReviewsController($id);//on instancie la methode
                        break;

                    case 'deleteContact'://admin veut supprimer un message
                        $deleteContact = new DeleteController();//on instancie la class
                        $id= $_GET['id'];
                        return $deleteContact->deleteAdminContactController($id);//on instancie la methode
                        break;
    
                        
            }}
            else if(!isset($_GET['action'])){
                //si aucune action est assigné envoie vers la page d'accueil
                $HomeCont = new HomeController();//on instancie la class
                return $HomeCont->showReviews();//on instancie la methode
            }
            else{
                //si aucun chemin ne correspond envoie vers la page d'erreur 404 !!
                $error404 = new error404Controller();//on instancie la class
                return $error404->showError404();//on instancie la methode
            }
           
        }
    }
//En fonction de l'action on va trouver le controller correspondant et donner une "valeur" à la variable $templates
 // si le client veut la page d'accueil, ne demande rien ou si aucune action est assigné on trouve le controller et on affiche la page d'accueil
    if(!isset($_GET['action']) || empty($_GET['action']) || $_GET['action']=="home"){
        include_once('./controller/HomeController.php');
        $template = 'home';
    }
    // si le client veut la page boulangerie, on trouve le controller et on affiche la bonne page
    else if($_GET['action']=="bakery"){
        include_once('./controller/BakeryController.php');
        $template = 'bakery';
    }
    // si le client veut la page patisserie, on trouve le controller et on affiche la bonne page
    else if($_GET['action']=="pastry"){
        include_once('./controller/PastryController.php');
        $template = 'pastry';
    }
    // si le client veut la page atelier, on trouve le controller et on affiche la bonne page
    else if($_GET['action']=="pastryClass"){
        include_once('./controller/PastryClassController.php');
        $template = 'pastryClass';
    }
    // si le client veut la page qui sommes nous, on trouve le controller et on affiche la bonne page
    else if($_GET['action']=="aboutUs"){ 
        include_once('./controller/AboutUsController.php');
        $template = 'aboutUs';
    }
    // si le client veut la page nous contacter, on trouve le controller et on affiche la bonne page
    else if($_GET['action']=="contactUs"){
        include_once('./controller/ContactUsController.php');
        $template = 'contactUs';
    }
    // si le client veut la page mention legale, on trouve le controller et on affiche la bonne page
    else if($_GET['action']=="legalDisclaimer"){
        include_once('./controller/legalDisclaimerController.php');
        $template = 'legalDisclaimer';
    }
    // si le client veut la page connexion, on trouve le controller et on affiche la bonne page
    else if($_GET['action']=="login"){
        include_once('./controller/LoginController.php');
        $template = 'login';
    }
    // si l'admin' veut la paged'accueil admin, on trouve le controller et on affiche la bonne page
    else if($_GET['action']=="homeAdmin"){
        include_once('./controller/LoginController.php');
        $template = 'homeAdmin';
    }
    // si l'admin' veut la page table admin, on trouve le controller et on affiche la bonne page
    else if($_GET['action']=="admin"){
        include_once('./controller/GetAllController.php');
        $template = 'admin';
    }
    // si l'admin' veut la page table equipe, on trouve le controller et on affiche la bonne page
    else if($_GET['action']=="adminTeam"){
        include_once('./controller/GetAllController.php');
        $template = 'adminTeam';
    }
    // si l'admin' veut la page table boulangerie, on trouve le controller et on affiche la bonne page
    else if($_GET['action']=="adminBakery"){
        include_once('./controller/GetAllController.php');
        $template = 'adminBakery';
    }
    // si l'admin' veut la page table patisserie, on trouve le controller et on affiche la bonne page
    else if($_GET['action']=="adminPastry"){
        include_once('./controller/GetAllController.php');
        $template = 'adminPastry';
    }
    // si l'admin' veut la page table atelier, on trouve le controller et on affiche la bonne page
    else if($_GET['action']=="adminClass"){
        include_once('./controller/GetAllController.php');
        $template = 'adminClass';
    }
    // si l'admin' veut la page table avis, on trouve le controller et on affiche la bonne page
    else if($_GET['action']=="adminReviews"){
        include_once('./controller/GetAllController.php');
        $template = 'adminReviews';
    }
    // si l'admin' veut la page table message, on trouve le controller et on affiche la bonne page
    else if($_GET['action']=="adminContact"){
        include_once('./controller/GetAllController.php');
        $template = 'adminContact';
    }
    // si l'admin veut se deconnecter on trouve le controller et on affiche la page login
    else if($_GET['action']=="logout"){
        include_once('./controller/LogoutController.php');
        $template = 'login';
    }
    // si l'admin veut viser une ligne on trouve le controller et on affiche la page
    else if($_GET['action']=="get"){
        include_once('./controller/GetController.php');
        $template = 'admin';
    }
    // si l'admin veut modifier une ligne on trouve le controller et on affiche la page
    else if($_GET['action']=="update"){
        include_once('./controller/UpdateController.php');
        $template = 'homeAdmin';
    }
    // si l'admin veut creer une ligne on trouve le controller et on affiche la page
    else if($_GET['action']=="create"){
        include_once('./controller/CreateController.php');
        $template = 'homeAdmin';
    }
    // si l'admin veut supprimer une ligne on trouve le controller et on affiche la page
    else if($_GET['action']=="delete"){
        include_once('./controller/DeleteController.php');
        $template = 'homeAdmin';
    }
    // si l'admin veut viser une ligne equipe on trouve le controller et on affiche la page
    else if($_GET['action']=="getTeam"){
        include_once('./controller/GetController.php');
        $template = 'adminTeam';
    }
    // si l'admin veut modifier une ligne equipe on trouve le controller et on affiche la page
    else if($_GET['action']=="updateTeam"){
        include_once('./controller/UpdateController.php');
        $template = 'homeAdmin';
    }
    // si l'admin veut creer une ligne equipe on trouve le controller et on affiche la page
    else if($_GET['action']=="createTeam"){
        include_once('./controller/CreateController.php');
        $template = 'homeAdmin';
    }
    // si l'admin veut supprimer une ligne equipe on trouve le controller et on affiche la page
    else if($_GET['action']=="deleteTeam"){
        include_once('./controller/DeleteController.php');
        $template = 'homeAdmin';
    }
    // si l'admin veut viser une ligne boulangerie on trouve le controller et on affiche la page
    else if($_GET['action']=="getBakery"){
        include_once('./controller/GetController.php');
        $template = 'adminBakery';
    }
    // si l'admin veut modifier une ligne bouangerie on trouve le controller et on affiche la page
    else if($_GET['action']=="updateBakery"){
        include_once('./controller/UpdateController.php');
        $template = 'homeAdmin';
    }
    // si l'admin veut creer une ligne boulangerie on trouve le controller et on affiche la page
    else if($_GET['action']=="createBakery"){
        include_once('./controller/CreateController.php');
        $template = 'homeAdmin';
    }
    // si l'admin veut supprimer une ligne boulangerie on trouve le controller et on affiche la page
    else if($_GET['action']=="deleteBakery"){
        include_once('./controller/DeleteController.php');
        $template = 'homeAdmin';
    }
    // si l'admin veut viser une ligne patisserie on trouve le controller et on affiche la page
    else if($_GET['action']=="getPastry"){
        include_once('./controller/GetController.php');
        $template = 'adminPastry';
    }
    // si l'admin veut modifier une ligne patisserie on trouve le controller et on affiche la page
    else if($_GET['action']=="updatePastry"){
        include_once('./controller/UpdateController.php');
        $template = 'homeAdmin';
    }
    // si l'admin veut creer une ligne patisserie on trouve le controller et on affiche la page
    else if($_GET['action']=="createPastry"){
        include_once('./controller/CreateController.php');
        $template = 'homeAdmin';
    }
    // si l'admin veut supprimer une ligne patisserie on trouve le controller et on affiche la page
    else if($_GET['action']=="deletePastry"){
        include_once('./controller/DeleteController.php');
        $template = 'homeAdmin';
    }
    // si l'admin veut viser une ligne atelier on trouve le controller et on affiche la page
    else if($_GET['action']=="getPastryClass"){
        include_once('./controller/GetController.php');
        $template = 'adminClass';
    }
    // si l'admin veut modifier une ligne atelier on trouve le controller et on affiche la page
    else if($_GET['action']=="updatePastryClass"){
        include_once('./controller/UpdateController.php');
        $template = 'homeAdmin';
    }// si l'admin veut creer une ligne atelier on trouve le controller et on affiche la page
    else if($_GET['action']=="createPastryClass"){
        include_once('./controller/CreateController.php');
        $template = 'homeAdmin';
    }
    // si l'admin veut supprimer une ligne atelier on trouve le controller et on affiche la page
    else if($_GET['action']=="deletePastryClass"){
        include_once('./controller/DeleteController.php');
        $template = 'homeAdmin';
    }
    // si l'admin veut supprimer une ligne avis on trouve le controller et on affiche la page
    else if($_GET['action']=="deleteReviews"){
        include_once('./controller/DeleteController.php');
        $template = 'homeAdmin';
    }
    // si l'admin veut supprimer une ligne message on trouve le controller et on affiche la page
    else if($_GET['action']=="deleteContact"){
        include_once('./controller/DeleteController.php');
        $template = 'homeAdmin';
    }
    // si le client fait une demande inéxistante on affiche la page erreur 404
    else{
        include_once('./controller/error404Controller.php');
        $template = 'error404';
    }
?>
