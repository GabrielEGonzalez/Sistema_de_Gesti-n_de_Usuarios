<?php

    require_once __DIR__ .'/../config/database.php';
    
class UserModel{

    private $pdo;

    public function __construct() {
        $database = new Database();
        $this->pdo = $database->getPDO(); // Obtiene la conexión PDO
    }

    public function user($email) {
        $stmt = $this->pdo->prepare("SELECT id, nombre, email, password, rol FROM usuarios WHERE email = :email");
        $stmt->bindParam(":email", $email);
        $stmt->execute();
        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

        return $usuario;
    }

    public function createUser($nombre, $email, $password, $rol) {
        $stmt = $this->pdo->prepare("INSERT INTO usuarios (nombre, email, password, rol) VALUES (:nombre, :email, :password, :rol)");
        $stmt->bindParam(":nombre", $nombre);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":password", $password);
        $stmt->bindParam(":rol", $rol);
        return $stmt->execute();
    }

    
}