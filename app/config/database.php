<?php


class Database {
    private $host = "127.0.0.1"; // Servidor
    private $port = "3307"; // Puerto de MariaDB
    private $dbname = "gestion_usuarios"; // Nombre de la base de datos
    private $username = "root"; // Usuario de MariaDB
    private $password = ""; // Contraseña (déjala vacía si no tienes)
    private $pdo;

    public function __construct() {
        $this->pdo = $this->conexion(); // Llama al método para establecer la conexión
    }

    public function conexion(): PDO {
        try {
            $pdo = new PDO("mysql:host={$this->host};port={$this->port};dbname={$this->dbname};charset=utf8mb4", $this->username, $this->password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo; // Retorna la conexión PDO
        } catch (PDOException $e) {
            die("Error en la conexión: " . $e->getMessage());
        }
    }

    public function getPDO(): PDO {
        return $this->pdo; // Método para acceder a la conexión PDO
    }
}