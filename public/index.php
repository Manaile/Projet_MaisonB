<?php
ini_set('display_errors','1');
ini_set('display_startup_errors','1');
error_reporting(E_ALL);

    define('ROOT',dirname(__DIR__));

    require ROOT.'/router/Router.php';

    //instanciation de la class Router
    $rout = new Router();

    //instanciation des methods de la class Router
    $review = $rout->getControllers();
    //var_dump($review);


    //inclure l'index.phtml
    include ROOT.'/views/index.phtml';

?>