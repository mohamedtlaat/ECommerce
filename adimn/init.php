<?php

    include 'connect.php';

    // Routes

    $tpl = 'includes/templates/'; // Templates directory
    $css = 'layout/css/';
    $js  = 'layout/js/';
    $lang = 'includes/languages/';

    // Include the import files

    include $lang . 'english.php';
    include $tpl . 'header.php';

    // include navbar in all pages expect the one with $nonavbar variable
    if(!isset($noNavbar)) {
        include $tpl . 'navbar.php';
    }
    