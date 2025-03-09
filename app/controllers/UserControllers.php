<?php

    require_once __DIR__ . '/../models/User.model.php';
class UserControllers{

    private $model;


    public function __construct(){
        $this->model= new UserModel();
    }

    public function registar(){
        require_once __DIR__ . '/../views/regsitroFormulario.view.php';
    }


    public function agregar(){
        
    }
}