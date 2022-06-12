<?php
ini_set('display_errors','1');
ini_set('display_startup_errors','1');
error_reporting(E_ALL);

session_start();

define('ROOT',dirname(__DIR__));
    
//recuperation du Router.php
require ROOT.'/router/Router.php';

//instanciation du Router
$rout = new Router();

//instanciation de la  method de la class Router
$items = $rout->getController();

//page phtml du corps du site
include ROOT.'/views/index.phtml';
    
?>