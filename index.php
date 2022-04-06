<?php

    require 'controller/HomeController.php';

    $HomeCont = new HomeController();
    $review = $HomeCont->showReviews();


    include 'views/index.phtml';
?>