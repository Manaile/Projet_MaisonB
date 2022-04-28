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
                        
            }}
            else if(!isset($_GET['action'])){
                $HomeCont = new HomeController();
                return $HomeCont->showReviews();
            }
            else{
                //envoie vars la page d'erreur 404 !!
                //echo "fail";
                $error404 = new error404Controller();
                return $error404->showError404();
            }
           
        }
        
        
    }

    if(!isset($_GET['action']) || empty($_GET['action']) || $_GET['action']=="home"){
        include_once('../controller/HomeController.php');
    }
    else if($_GET['action']=="bakery"){
        include_once('../controller/BakeryController.php');
    }
    else if($_GET['action']=="pastry"){
        include_once('../controller/PastryController.php');
    }
    else if($_GET['action']=="pastryClass"){
        include_once('../controller/PastryClassController.php');
    }
    else if($_GET['action']=="aboutUs"){
        include_once('../controller/AboutUsController.php');
    }
    else if($_GET['action']=="contactUs"){
        include_once('../controller/ContactUsController.php');
    }
    else if($_GET['action']=="legalDisclaimer"){
        include_once('../controller/legalDisclaimerController.php');
    }
    else{
        include_once('../controller/error404Controller.php');
    }
?>
