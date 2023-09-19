<?php

class Conexion{

    static public function conectar(){
        try{
            $conn = new PDO("mysql:host=localhost:3306;dbname=kenbloksbd","root","",array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
            return $conn;
        }
        catch(PDOException $e){
            echo 'Fallo la Conexion: ' . $e->getMessage();
        }
    }
}