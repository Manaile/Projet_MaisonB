<?php
mb_internal_encoding("UTF-8");
ini_set('display_errors','1');
ini_set('display_startup_errors','1');
error_reporting(E_ALL);

   class Router{
        private $action;
    
        
        public function getController(){
            if(isset($_GET['action'])){
                $action = $_GET['action'];

                switch($action){

                    case 'home':
                        $HomeCont = new HomeController();
                        return $HomeCont->showReviews();
                        //var_dump($blop);
                        break;

                    case 'bakery':
                        $BakeryCont = new BakeryController();
                        return  $BakeryCont->showBakeryImg();
                        //var_dump($blop2);
                        break;

                    case 'pastry':
                        $PastryCont = new PastryController();
                        return $PastryCont->showPastryImg();
                        //var_dump($blop2);
                        break;
                    
                    case 'pastryClass':
                        $PastryClassCont = new PastryCLassController();
                        return $PastryClassCont->showPastryClassCard();
                        //var_dump($blop2);
                        break;

                    case 'aboutUs':
                        $aboutUsCont = new aboutUsController();
                        return $aboutUsCont->showaboutUsImg();
                        //var_dump($blop2);
                        break;
                    
                    case 'contactUs':
                        $ContactUsCont = new ContactUsController();
                        return $ContactUsCont->getContactUs();
                        //var_dump($blop2);
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
                        $contol = new GetController();
                        // si on récupère l'id sélectionné dans l'url alors on lance 
                        // la méthode qui va ensuite modifier
                        $id= $_GET['id'];
                        return $contol->getAdminController($id);
                        break;
                        
                    case 'update':
                        $update = new UpdateController();
                        $id= $_POST['id'];
                        $name = $_POST['name'];
                        $email = $_POST['mail'];
                        $password = $_POST['password'];
                        return $update->updateAdminController($id,$name,$email,$password);
                        break;

                    case 'create':
                        $CreateNewAdmin = new CreateController();
                        return $CreateNewAdmin->getAdmin();
                        //var_dump($blop2);
                        break;
                        
                        
            }}
            else if(!isset($_GET['action'])){
                $HomeCont = new HomeController();
                return $HomeCont->showReviews();
            }
            else{
                //envoie vars la page d'erreur 404 !!
                $error404 = new error404Controller();
                return $error404->showError404();
            }
           
        }
    }

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
    else{
        include_once('../controller/error404Controller.php');
        $template = 'error404';
    }
?>
