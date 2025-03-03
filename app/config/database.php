<?php

class Database{

   private  $host = "127.0.0.1"; // Servidor
    private $port = "3307"; // Puerto de MariaDB
    private $dbname = "gestion_usuarios"; // Nombre de la base de datos
    private $username = "root"; // Usuario de MariaDB
    private $password = ""; // Contraseña (déjala vacía si no tienes)

    public function conexion(){
        try {
            $pdo = new PDO("mysql:host=$host;port=$port;dbname=$dbname;charset=utf8mb4", $username, $password);
    
            // Configurar PDO para lanzar excepciones en caso de error
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo 'Conexion exitosa';
        } catch (PDOException $e) {
            die("error en la conexion : " . $e->getMessage());
        }
        
        return $pdo;
    }

}