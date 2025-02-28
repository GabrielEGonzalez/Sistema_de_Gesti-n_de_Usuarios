<?php

require_once '../app/config/config.php';
require_once '../app/init.php';
require_once '../app/lib/core.php';
require_once '../app/controllers/ControllersPrueba.php';

$url = new Core();
echo '' . $url->getUrl();

$nuevaURL = explode('/', $url->getUrl());

echo '<pre>';
print_r($nuevaURL); // Muestra las partes de la URL
echo '</pre>';

if((BASE_URL .'public/'. $nuevaURL[4].'/') === BASE_URL .'public/home/'){
    $nueva = new ControllersPrueba();
    $nueva->index();
}
