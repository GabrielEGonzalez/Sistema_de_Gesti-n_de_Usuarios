<?php

    require_once __DIR__ . '/../models/User.model.php';

class AuthController{

    private $model ; 

    public function __construct(){
        $this->model = new UserModel();
    }

    public function inicioSecion(){
        require_once __DIR__.'/../views/formulario.view.php';
    }


    public function verificarCredenciales(){
        // aqui vamos a interactuar con los datos recibidos por el post y la base de datos para ver si el usuario esta 
        // y tambien vamos hacer el inicio de seccion y guardar el id , rol si esta las credenciales a la base de datos 
        // y si no esta mandarlo a un formulario de registro

        // Verificar si los datos están disponibles
        if (!isset($_POST['mail']) || !isset($_POST['password'])) {
            echo "Por favor, complete todos los campos.";
            return; // Salir si faltan campos
        }

        $email = $_POST['mail'];
        $password = $_POST['password'];

        // Interactuar con el modelo para verificar las credenciales
        $usuario = $this->model->user($email);

        // Verifica si el usuario existe y la contraseña es correcta
        if ($usuario && ($password === $usuario["password"])) {
            
            // Guardar datos en la sesión
            session_start();
            $_SESSION["usuario"] = [
                "id" => $usuario["id"],
                "rol" => $usuario["rol"]
            ];

            // Redirigir al dashboard
            header("Location: /sistemaGestionUsuario/Sistema_de_Gesti-n_de_Usuarios/public/dashboard");
            exit;
        } else {
            echo "Email o contraseña incorrectos.";
        }
    }
}