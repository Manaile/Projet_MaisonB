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
                        $Admin = new AdminController();
                        return $Admin->showAdmin();
                        break;

                    case 'adminTeam':
                        $Admin = new AdminController();
                        return $Admin->showAbout();
                        break;

                    case 'adminBakery':
                        $Admin = new AdminController();
                        return $Admin->showBakery();
                        break;

                    case 'adminPastry':
                        $Admin = new AdminController();
                        return $Admin->showPastry();
                        break;

                    case 'adminClass':
                        $Admin = new AdminController();
                        return $Admin->showClass();
                        break;

                    case 'adminReviews':
                        $Admin = new AdminController();
                        return $Admin->showReviews();
                        break;

                    case 'adminContact':
                        $Admin = new AdminController();
                        return $Admin->showContact();
                        break;

                    case 'logout':
                        $out = new LogoutController();
                        return $out->getlogout();
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
        include_once('../controller/AdminController.php');
        $template = 'admin';
    }
    else if($_GET['action']=="adminTeam"){
        include_once('../controller/AdminController.php');
        $template = 'adminTeam';
    }
    else if($_GET['action']=="adminBakery"){
        include_once('../controller/AdminController.php');
        $template = 'adminBakery';
    }
    else if($_GET['action']=="adminPastry"){
        include_once('../controller/AdminController.php');
        $template = 'adminPastry';
    }    
    else if($_GET['action']=="adminClass"){
        include_once('../controller/AdminController.php');
        $template = 'adminClass';
    }
    else if($_GET['action']=="adminReviews"){
        include_once('../controller/AdminController.php');
        $template = 'adminReviews';
    }
    else if($_GET['action']=="adminContact"){
        include_once('../controller/AdminController.php');
        $template = 'adminContact';
    }  
    else if($_GET['action']=="logout"){
        include_once('../controller/LogoutController.php');
        $template = 'login';
    } 
    else{
        include_once('../controller/error404Controller.php');
        $template = 'error404';
    }
?>
