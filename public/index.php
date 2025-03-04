<?php

require_once '../app/config/config.php';
/* require_once '../app/init.php'; */
require_once '../app/lib/core.php';
require_once '../app/controllers/ControllersPrueba.php';
require_once '../app/controllers/AuthControllers.php';

$url = new Core();
/* echo '' . $url->getUrl(); */

/* $nuevaURL = explode('/', $url->getUrl()); */

/* echo '<pre>';
print_r($nuevaURL); // Muestra las partes de la URL
echo '</pre>'; */
/* BASE_URL .'public/'. $nuevaURL[4].'/' */
if ($url->getUrl() === (BASE_URL . 'public/home/')) {
    $nueva = new ControllersPrueba();
    $nueva->index();
} else if ($url->getUrl() === (BASE_URL)) {

    $dash = new AuthController();
    $dash->inicioSecion();
    
} else if($url->getUrl() === (BASE_URL . 'public/editar/')){

}else if($url->getUrl() === (BASE_URL . 'public/iniciar/')){
    $email = $_POST['mail'];
    $password = $_POST['password'];
    echo $email.''.$password;
}else {
    echo '</br>';
    echo 'hola error en el ruta ⚠️. ';
    echo '</br>';
    echo BASE_URL . 'public/home/';
}