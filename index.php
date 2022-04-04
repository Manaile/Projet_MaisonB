<?php

    require 'controller/Controller.php';

    $Controller= new Controller();
    $review= $Controller->review();

    include 'views/index.phtml';
?>