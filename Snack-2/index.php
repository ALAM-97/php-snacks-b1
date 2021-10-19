<?php

    $name = $_GET['name'];
    $mail = $_GET['email'];
    $age = $_GET['age'];
    $infos = false;

    if ( strlen($name) > 3 && strpos($mail, '.') == true && strpos($mail, '@') == true && is_numeric($age)) {
        echo "Accesso riuscito";
    } else {
        echo "Accesso negato";
    }