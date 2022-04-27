<?php
mb_internal_encoding("UTF-8");
ini_set('display_errors','1');
ini_set('display_startup_errors','1');
error_reporting(E_ALL);


//include_once('../controller/HomeController.php');
//include_once('../controller/BakeryController.php');
//include_once('../controller/PastryController.php');
include_once('../controller/PastryClassController.php');
//include_once('../controller/AboutUsController.php');
//include_once('../controller/ContactUsController.php');
//include_once('../controller/legalDisclaimerController.php');
//include_once('../controller/error404Controller.php');

   class Router{
        private $action;
    
        public function getControllers(){
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
            else {
                //envoie vars la page d'erreur 404 !!
                //echo "fail";
                //$error404 = new error404Controller();
                //return $error404->showError404Controller();
            }
           
        }
        
        
    }

?>