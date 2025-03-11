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
        session_start();
        if(!isset($_POST['Nombre'])){
            echo 'Ingresar el nombre';
            return;
        }

        if(!isset($_POST['Email'])){
            echo 'Ingresar el Email';
            return;
        }

        if(!isset($_POST['password'])){
            echo 'Ingresar el Password';
            return;
        }

        if(!isset($_POST['Rol'])){
            echo 'Ingresar el Rol';
            return;
        }

        if($_SESSION['usuario']['rol'] !== 'Usuario Regular'){
            $nombre = $_POST['Nombre'];
            $email = $_POST['Email'];
            $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
            $rol = $_POST['Rol'];
            $this->model->createUser($nombre, $email, $password, $rol);

            header('Location: /sistemaGestionUsuario/Sistema_de_Gesti-n_de_Usuarios/public/dashboard');
        }else{
            header('Location: /sistemaGestionUsuario/Sistema_de_Gesti-n_de_Usuarios/public/dashboard');
        }
        
    }
}