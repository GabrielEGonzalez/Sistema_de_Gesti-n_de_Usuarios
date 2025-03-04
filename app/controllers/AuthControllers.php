<?php

class AuthController{

    /* private $model ; */

    /* public function __construtor(){
        $this->model = new model();
    } */

    public function inicioSecion(){
        require_once __DIR__.'/../views/formulario.view.php';
    }


    public function verificarCredenciales(){
        // aqui vamos a interactuar con los datos recibidos por el post y la base de datos para ver si el usuario esta 
        // y tambien vamos hacer el inicio de seccion y guardar el id , rol si esta las credenciales a la base de datos 
        // y si no esta mandarlo a un formulario de registro
    }
}