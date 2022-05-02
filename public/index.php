<?php
ini_set('display_errors','1');
ini_set('display_startup_errors','1');
error_reporting(E_ALL);

session_start();
if($_GET['action']=="logout"){
    
    session_destroy();
   
}
define('ROOT',dirname(__DIR__));
    

require ROOT.'/router/Router.php';

   
    //instanciation du Router
$rout = new Router();

    //instanciation de la  method de la class Router
$items = $rout->getController();
var_dump( $_SESSION['name'] );
   //var_dump($items);
    //inclure l'index.phtml
include ROOT.'/views/index.phtml';
    
?>