<?php
mb_internal_encoding("UTF-8");
ini_set('display_errors','1');
ini_set('display_startup_errors','1');
error_reporting(E_ALL);

   class Router{
        private $action;
        public $templates;
    
        public function getController(): array{
            if(isset($_GET['action'])){
                $action = $_GET['action'];
                // on va gerer les differentes action avec un switch et instancier la methode correspondante
                switch($action){
                    case 'home':
                        $HomeCont = new HomeController();
                        return $HomeCont->showReviews();
                        break;

                    case 'bakery':
                        $BakeryCont = new BakeryController();
                        return  $BakeryCont->showBakeryImg();
                        break;

                    case 'pastry':
                        $PastryCont = new PastryController();
                        return $PastryCont->showPastryImg();
                        break;
                    
                    case 'pastryClass':
                        $PastryClassCont = new PastryCLassController();
                        return $PastryClassCont->showPastryClassCard();
                        break;

                    case 'aboutUs':
                        $aboutUsCont = new aboutUsController();
                        return $aboutUsCont->showaboutUsImg();
                        break;
                    
                    case 'contactUs':
                        $ContactUsCont = new ContactUsController();
                        return $ContactUsCont->getContactUs();
                        break;

                    case 'legalDisclaimer':
                        $legalDisclaimer = new legalDisclaimerController();
                        return $legalDisclaimer->showLegalDisclaimer();
                        break;

                    case 'login':
                        $Login = new LoginController();
                        return $Login->logAdmin();
                        break;

                    case 'homeAdmin':
                        $Login = new LoginController();
                        return $Login->logAdmin();
                        break;       
                    
                    case 'admin':
                        $GetAll = new GetAllController();
                        return $GetAll->showAllAdmin();
                        break;

                    case 'adminTeam':
                        $GetAll = new GetAllController();
                        return $GetAll->showAllAbout();
                        break;

                    case 'adminBakery':
                        $GetAll = new GetAllController();
                        return $GetAll->showAllBakery();
                        break;

                    case 'adminPastry':
                        $GetAll = new GetAllController();
                        return $GetAll->showAllPastry();
                        break;

                    case 'adminClass':
                        $GetAll = new GetAllController();
                        return $GetAll->showAllClass();
                        break;

                    case 'adminReviews':
                        $GetAll = new GetAllController();
                        return $GetAll->showAllReviews();
                        break;

                    case 'adminContact':
                        $GetAll = new GetAllController();
                        return $GetAll->showAllContact();
                        break;

                    case 'logout':
                        $out = new LogoutController();
                        return $out->getlogout();
                        break;

                    case 'get':
                        $control = new GetController();
                        // si on récupère l'id sélectionné dans l'url alors on lance la méthode qui va ensuite gerer la modif
                        $id= $_GET['id'];
                        return $control->getAdminController($id);
                        break;
                        
                    case 'update':
                        $update = new UpdateController();
                        // on recupère les champs modifier
                        $id= $_POST['id'];
                        $name = $_POST['name'];
                        $email = $_POST['mail'];
                        $password = $_POST['password'];
                        return $update->updateAdminController($id,$name,$email,$password);
                        break;

                    case 'create':
                        $CreateNewAdmin = new CreateController();
                        // on gère la suppression grâce à l'id 
                        return $CreateNewAdmin->getAdmin();
                        break;
                    
                    case 'delete':
                        $delete = new DeleteController();
                        // on gère la suppression grâce à l'id 
                        $id= $_GET['id'];
                        return $delete->deleteAdminController($id);
                        break;
                    
                    case 'getTeam':
                        $controlTeam = new GetController();
                        $id= $_GET['id'];
                        return $controlTeam->getAdminTeamController($id);
                        break;

                    case 'updateTeam':
                        $updateTeam = new UpdateController();
                        $id= $_POST['id'];
                        $name = $_POST['name'];
                        $post = $_POST['profession'];
                        $url = $_POST['picture'];
                        $description = $_POST['description'];
                        return $updateTeam->updateAdminTeamController($id,$url,$name,$post,$description);
                        break;

                    case 'createTeam':
                        $CreateNewAdminTeam = new CreateController();
                        return $CreateNewAdminTeam->getAdminTeam();
                        break;

                    case 'deleteTeam':
                        $deleteTeam = new DeleteController();
                        $id= $_GET['id'];
                        return $deleteTeam->deleteAdminTeamController($id);
                        break;

                    case 'getBakery':
                        $controlBakery = new GetController();
                        $id= $_GET['id'];
                        return $controlBakery->getAdminBakeryController($id);
                        break;

                    case 'updateBakery':
                        $updateBakery = new UpdateController();
                        $id= $_POST['id'];
                        $url = $_POST['picture'];
                        $description = $_POST['description'];
                        return $updateBakery->updateAdminBakeryController($id,$url,$description);
                        break;

                    case 'createBakery':
                        $CreateNewAdminBakery = new CreateController();
                        return $CreateNewAdminBakery->getAdminBakery();
                        break;

                    case 'deleteBakery':
                        $deleteBakery = new DeleteController();
                        $id= $_GET['id'];
                        return $deleteBakery->deleteAdminBakeryController($id);
                        break;

                    case 'getPastry':
                        $controlPastry = new GetController();
                        $id= $_GET['id'];
                        return $controlPastry->getAdminPastryController($id);
                        break;

                    case 'updatePastry':
                        $updatePastry = new UpdateController();
                        $id= $_POST['id'];
                        $url = $_POST['picture'];
                        $description = $_POST['description'];
                        return $updatePastry->updateAdminPastryController($id,$url,$description);
                        break;
    
                    case 'createPastry':
                        $CreateNewAdminPastry = new CreateController();
                        return $CreateNewAdminPastry->getAdminPastry();
                        break;

                    case 'deletePastry':
                        $deletePastry = new DeleteController();
                        $id= $_GET['id'];
                        return $deletePastry->deleteAdminPastryController($id);
                        break;

                    case 'getPastryClass':
                        $controlPastryClass = new GetController();
                        $id= $_GET['id'];
                        return $controlPastryClass->getAdminPastryClassController($id);
                        break;

                    case 'updatePastryClass':
                        $updatePastryClass = new UpdateController();
                        $id= $_POST['id'];
                        $url = $_POST['picture'];
                        $description = $_POST['description'];
                        $name= $_POST['name'];
                        $date = $_POST['date'];
                        $price = $_POST['price'];
                        return $updatePastryClass->updateAdminPastryClassController($id,$url,$description, $name, $date, $price);
                        break;

                    case 'createPastryClass':
                            $CreateNewAdminPastryClass = new CreateController();
                            return $CreateNewAdminPastryClass->getAdminPastryClass();
                            break;

                    case 'deletePastryClass':
                        $deletePastryClass = new DeleteController();
                        $id= $_GET['id'];
                        return $deletePastryClass->deleteAdminPastryClassController($id);
                        break;

                    case 'deleteReviews':
                        $deleteReviews = new DeleteController();
                        $id= $_GET['id'];
                        return $deleteReviews->deleteAdminReviewsController($id);
                        break;

                    case 'deleteContact':
                        $deleteContact = new DeleteController();
                        $id= $_GET['id'];
                        return $deleteContact->deleteAdminContactController($id);
                        break;
    
                        
            }}
            else if(!isset($_GET['action'])){
                //si aucun chemin n'est selectionner envoie vers la page d'accueil
                $HomeCont = new HomeController();
                return $HomeCont->showReviews();
            }
            else{
                //si aucun chemin ne correspond envoie vers la page d'erreur 404 !!
                $error404 = new error404Controller();
                return $error404->showError404();
            }
           
        }
    }
//En fonction de l'action on va recuperer le controller correspondant et donner une "valeur" à la variable templates
    if(!isset($_GET['action']) || empty($_GET['action']) || $_GET['action']=="home"){
        include_once('../controller/HomeController.php');
        $template = 'home';
    }
    else if($_GET['action']=="bakery"){
        include_once('../controller/BakeryController.php');
        $template = 'bakery';
    }
    else if($_GET['action']=="pastry"){
        include_once('../controller/PastryController.php');
        $template = 'pastry';
    }
    else if($_GET['action']=="pastryClass"){
        include_once('../controller/PastryClassController.php');
        $template = 'pastryClass';
    }
    else if($_GET['action']=="aboutUs"){
        include_once('../controller/AboutUsController.php');
        $template = 'aboutUs';
    }
    else if($_GET['action']=="contactUs"){
        include_once('../controller/ContactUsController.php');
        $template = 'contactUs';
    }
    else if($_GET['action']=="legalDisclaimer"){
        include_once('../controller/legalDisclaimerController.php');
        $template = 'legalDisclaimer';
    }
    else if($_GET['action']=="login"){
        include_once('../controller/LoginController.php');
        $template = 'login';
    }
    else if($_GET['action']=="homeAdmin"){
        include_once('../controller/LoginController.php');
        $template = 'homeAdmin';
    }
    else if($_GET['action']=="admin"){
        include_once('../controller/GetAllController.php');
        $template = 'admin';
    }
    else if($_GET['action']=="adminTeam"){
        include_once('../controller/GetAllController.php');
        $template = 'adminTeam';
    }
    else if($_GET['action']=="adminBakery"){
        include_once('../controller/GetAllController.php');
        $template = 'adminBakery';
    }
    else if($_GET['action']=="adminPastry"){
        include_once('../controller/GetAllController.php');
        $template = 'adminPastry';
    }    
    else if($_GET['action']=="adminClass"){
        include_once('../controller/GetAllController.php');
        $template = 'adminClass';
    }
    else if($_GET['action']=="adminReviews"){
        include_once('../controller/GetAllController.php');
        $template = 'adminReviews';
    }
    else if($_GET['action']=="adminContact"){
        include_once('../controller/GetAllController.php');
        $template = 'adminContact';
    }  
    else if($_GET['action']=="logout"){
        include_once('../controller/LogoutController.php');
        $template = 'login';
    }
    else if($_GET['action']=="get"){
        include_once('../controller/GetController.php');
        $template = 'admin';
    }
    else if($_GET['action']=="update"){
        include_once('../controller/UpdateController.php');
        $template = 'homeAdmin';
    }
    else if($_GET['action']=="create"){
        include_once('../controller/CreateController.php');
        $template = 'homeAdmin';
    }
    else if($_GET['action']=="delete"){
        include_once('../controller/DeleteController.php');
        $template = 'homeAdmin';
    }
    else if($_GET['action']=="getTeam"){
        include_once('../controller/GetController.php');
        $template = 'adminTeam';
    }
    else if($_GET['action']=="updateTeam"){
        include_once('../controller/UpdateController.php');
        $template = 'homeAdmin';
    }
    else if($_GET['action']=="createTeam"){
        include_once('../controller/CreateController.php');
        $template = 'homeAdmin';
    }
    else if($_GET['action']=="deleteTeam"){
        include_once('../controller/DeleteController.php');
        $template = 'homeAdmin';
    }
    else if($_GET['action']=="getBakery"){
        include_once('../controller/GetController.php');
        $template = 'adminBakery';
    }
    else if($_GET['action']=="updateBakery"){
        include_once('../controller/UpdateController.php');
        $template = 'homeAdmin';
    }
    else if($_GET['action']=="createBakery"){
        include_once('../controller/CreateController.php');
        $template = 'homeAdmin';
    }
    else if($_GET['action']=="deleteBakery"){
        include_once('../controller/DeleteController.php');
        $template = 'homeAdmin';
    }
    else if($_GET['action']=="getPastry"){
        include_once('../controller/GetController.php');
        $template = 'adminPastry';
    }
    else if($_GET['action']=="updatePastry"){
        include_once('../controller/UpdateController.php');
        $template = 'homeAdmin';
    }
    else if($_GET['action']=="createPastry"){
        include_once('../controller/CreateController.php');
        $template = 'homeAdmin';
    }
    else if($_GET['action']=="deletePastry"){
        include_once('../controller/DeleteController.php');
        $template = 'homeAdmin';
    }
    else if($_GET['action']=="getPastryClass"){
        include_once('../controller/GetController.php');
        $template = 'adminClass';
    }
    else if($_GET['action']=="updatePastryClass"){
        include_once('../controller/UpdateController.php');
        $template = 'homeAdmin';
    }
    else if($_GET['action']=="createPastryClass"){
        include_once('../controller/CreateController.php');
        $template = 'homeAdmin';
    }
    else if($_GET['action']=="deletePastryClass"){
        include_once('../controller/DeleteController.php');
        $template = 'homeAdmin';
    }
    else if($_GET['action']=="deleteReviews"){
        include_once('../controller/DeleteController.php');
        $template = 'homeAdmin';
    }
    else if($_GET['action']=="deleteContact"){
        include_once('../controller/DeleteController.php');
        $template = 'homeAdmin';
    }
    else{
        include_once('../controller/error404Controller.php');
        $template = 'error404';
    }
?>
