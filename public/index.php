<?php

require_once '../app/config/config.php';
/* require_once '../app/init.php'; */
require_once '../app/lib/core.php';
require_once '../app/controllers/ControllersPrueba.php';
require_once '../app/controllers/AuthControllers.php';

$url = new Core();
$authController = new AuthController();
/* echo '' . $url->getUrl(); */

/* $nuevaURL = explode('/', $url->getUrl()); */

/* echo '<pre>';
print_r($nuevaURL); // Muestra las partes de la URL
echo '</pre>'; */
/* BASE_URL .'public/'. $nuevaURL[4].'/' */
if ($url->getUrl() === (BASE_URL . 'public/dashboard')) {
    $nueva = new ControllersPrueba();
    $nueva->index();
} else if ($url->getUrl() === (BASE_URL)) {

    $authController->inicioSecion();
    
} else if($url->getUrl() === (BASE_URL . 'public/editar/')){

}else if($url->getUrl() === (BASE_URL . 'public/iniciar/')){
    $authController->verificarCredenciales();
}else {
    echo '</br>';
    echo 'hola error en el ruta ⚠️. ';
    echo '</br>';
    echo BASE_URL . 'public/home/';
}