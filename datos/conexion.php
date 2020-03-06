<?php

class conexion {

    /**
     * Metodo estatico que valida la conexion con el motor de base de datos
     * @return PDO Retorna una conexion
     */
    public static function conectar() {
        try {

            $cn = new PDO("mysql:host=localhost;dbname=sei_sw", "root", "");

            //echo "Conectado a la base de datos SEI";

            return $cn;
        } catch (PDOException $ex) {

            die($ex->getMessage());
        }
    }

}

//conexion::conectar();

