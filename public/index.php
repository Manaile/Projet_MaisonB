<?php
ini_set('display_errors','1');
ini_set('display_startup_errors','1');
error_reporting(E_ALL);

define('ROOT',dirname(__DIR__));
    

require ROOT.'/router/Router.php';

   
    //instanciation du Router
$rout = new Router();

    //instanciation de la  method de la class Router
$items = $rout->getController();
   
    //inclure l'index.phtml
include ROOT.'/views/index.phtml';
    
?>