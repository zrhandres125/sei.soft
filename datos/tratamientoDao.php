<?php

include "conexion.php";
include "entidades/tratamiento.php";

// Objeto de acceso a datos (Data access object), se comunica con la bd
class tratamientoDao extends conexion {

    // Variable de conexion
    protected static $cnx;

    private static function getConexion() {

        self::$cnx = conexion::conectar();
    }

    private static function desconectar() {

        self::$cnx = null;
    }

    /**
     * Metodo que lista los tratamientos
     * @return obj tratamiento
     */
    public static function getTratamientos() {

        $query = "SELECT id_tratamiento, nombre, observaciones, status_tratamiento "
                . "FROM tratamientos ORDER BY id_tratamiento ASC";

        self::getConexion();

        $resultado = self::$cnx->prepare($query);

        $resultado->execute();

        //Obtiene toda la lista de datos que ejecuta el select
        $filas = $resultado->fetchAll();

        return $filas;
    }

    /**
     * Metodo que registra los tratamientos desde el administrador o los actualiza
     * @param object $tratamiento
     * @return boolean 1 registra y 2 no registra
     */
    public static function crearTratamiento($tratamiento) {

        //valida que venga el id para proceder a actualizar
        if (is_null($tratamiento->getId_tratamiento())) {

            $query = "INSERT INTO tratamientos (nombre, observaciones, status_tratamiento)"
                    . " VALUES (:nombre, :observaciones, :status_tratamiento)";
        } else {

            $query = "UPDATE tratamientos SET nombre=:nombre, observaciones=:observaciones, "
                    . "status_tratamiento=:status_tratamiento WHERE id_tratamiento = :id_tratamiento";
        }


        self::getConexion();

        $resultado = self::$cnx->prepare($query);

        $nombre             = $tratamiento->getNombre();
        $observaciones      = $tratamiento->getObservaciones();
        $status_tratamiento = $tratamiento->getStatus_tratamiento();

        
        if (!is_null($tratamiento->getId_tratamiento())) {

            $id_tratamiento = $tratamiento->getId_tratamiento();
            $resultado->bindParam(":id_tratamiento", $id_tratamiento);
        }

        $resultado->bindParam(":nombre", $nombre);
        $resultado->bindParam(":observaciones", $observaciones);
        $resultado->bindParam(":status_tratamiento", $status_tratamiento);



        if ($resultado->execute()) {
            return true;
        }

        return false;
    }

    /**
     * Metodo que sirve para buscar un tratamiento por su nombre, esto con el fin
     * de cargar el formulario para su posterior actualizacion
     * @param String $nombre
     * @return object
     */
    public static function getTratamientoPorid($nombre) {

        $query = "SELECT id_tratamiento, nombre, observaciones, status_tratamiento "
                . "FROM tratamientos WHERE nombre = :nombre";
        
        //echo $query;
        
        self::getConexion();

        $resultado = self::$cnx->prepare($query);

        $resultado->bindParam(":nombre", $nombre);

        $resultado->execute();

        $filas = $resultado->fetch();

        $tratamiento = new tratamiento();
        $tratamiento->setId_tratamiento($filas["id_tratamiento"]);
        $tratamiento->setNombre($filas["nombre"]);
        $tratamiento->setObservaciones($filas["observaciones"]);
        $tratamiento->setStatus_tratamiento($filas["status_tratamiento"]);


        return $tratamiento;
    }

    /**
     * Metodo que sirve para eliminar un tratamiento
     * @param object $nombre
     * @return boolean
     */
    public static function eliminarTratamiento($nombre) {

        $query = "DELETE FROM tratamientos WHERE nombre = :nombre";

        self::getConexion();

        $resultado = self::$cnx->prepare($query);

        $resultado->bindParam(":nombre", $nombre);

        $resultado->execute();

        if ($resultado->execute()) {
            return true;
        }

        return false;
    }

}
