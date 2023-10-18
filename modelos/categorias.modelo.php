<?php

require_once "conexion.php";

class CategoriasModelo{

    static public function mdlListarCategorias(){

        $stmt = Conexion::conectar()->prepare("SELECT id_categoria, 
                                                      nombre_categoria,
                                                      aplica_peso as medida,
                                                      date(fecha_creacion_categoria) as fecha_creacion_categoria,
                                                      fecha_actualizacion_categoria,
                                                      '' as opciones
                                                FROM categorias c
                                                order BY id_categoria DESC");

        $stmt -> execute();

        return $stmt->fetchAll();
    }
}