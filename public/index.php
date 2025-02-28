<?php

    require_once '../app/config/config.php';
    require_once '../app/init.php';
    require_once '../app/lib/core.php';
    require_once '../app/controllers/ControllersPrueba.php';

    $url = new Core();
    echo ''. $url->getUrl();

    $nuevaURL = explode(BASE_URL , $url->getUrl());

    echo '' . $nuevaUrl;

    /* if(){

    } */
