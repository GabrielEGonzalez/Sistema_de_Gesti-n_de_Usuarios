<?php

require_once '../app/config/config.php';
/* require_once '../app/init.php'; */
require_once '../app/lib/core.php';
require_once '../app/controllers/ControllersPrueba.php';
require_once '../app/controllers/AuthControllers.php';
require_once '../app/controllers/UserControllers.php';

$url = new Core();
$authController = new AuthController();
$userControlller = new UserControllers();
/* echo '' . $url->getUrl(); */

/* $nuevaURL = explode('/', $url->getUrl()); */

/* echo '<pre>';
print_r($nuevaURL); // Muestra las partes de la URL
echo '</pre>'; */
/* BASE_URL .'public/'. $nuevaURL[4].'/' */

$pattern = '#^' . preg_quote(BASE_URL . 'public/editar', '#') . '\?id=(\d+)$#';

if ($url->getUrl() === (BASE_URL . 'public/dashboard')) {
    $userControlller->dashboard();
} else if ($url->getUrl() === (BASE_URL)) {
    $authController->inicioSecion();
} else if (preg_match($pattern, $url->getUrl(), $matches)) {
    $userControlller->editview();
} else if ($url->getUrl() === (BASE_URL . 'public/iniciar/')) {
    $authController->verificarCredenciales();
} else if ($url->getUrl() === (BASE_URL . 'public/agregar/')) {
    $userControlller->registar();
} else if ($url->getUrl() === (BASE_URL . '/public/Registrar')) {
    $userControlller->agregar();
} else {
    echo '</br>';
    echo 'hola error en el ruta ⚠️. ';
    echo '</br>';
}