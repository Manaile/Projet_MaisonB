<?php

    require 'controller/Controller.php';

    $Controller= new Controller();
    $review= $Controller->reviews();

    include 'views/index.phtml';
?>