<?php


class Database{


    public function conexion(){


        try {
            $conn = new PDO();
        } catch (Exception $e) {
            echo $e;
        }
        
        return $conn;
    }

}