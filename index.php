<?php

//ROUTER
if (array_key_exists('route', $_GET)) {

    switch ($_GET['route']) {

        case 'home':

            require_once 'layout.html';
            break;

        case 'api':

            require_once 'layout.html';
            break;
    }
} else {
    header('Location: index.php?route=home');
    exit;
}
