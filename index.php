<?php
ini_set('display_errors','1');
ini_set('display_startup_errors','1');
error_reporting(E_ALL);


    require 'router/router.php';

    $router = new router($request);

    $router->getControllers();

    include 'views/index.phtml';

?>