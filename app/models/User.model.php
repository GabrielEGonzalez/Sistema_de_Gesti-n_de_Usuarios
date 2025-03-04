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
}