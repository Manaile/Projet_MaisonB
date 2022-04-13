<?php
ini_set('display_errors','1');
ini_set('display_startup_errors','1');
error_reporting(E_ALL);

// require './controller/HomeController.php';

    define('ROOT',dirname(__DIR__));
    //echo ROOT;

    require ROOT.'/router/Router.php';
    require ROOT.'/Autoloader.php';

    $request = $_GET["url"];

    $router = new Router($request);
    $Autoloader = new Autoloader();

    $Autoloader->start();
    $router->getControllers();

    include ROOT.'/views/index.phtml';

    // $home = new HomeController();
    //get pour url $request
?>