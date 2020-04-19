<?php

include "datos/tratamientoDao.php";

//Capa que se comunica con la vista
class tratamientoControlador {

    /**
     * Lista todos los tratamientos registrados
     * @return obj tratamiento
     */
    public function getTratamientos() {

        return tratamientoDao::getTratamientos();
    }

    /**
     * Crea o actualiza un tratamiento desde el administrador
     * Datos de la tabla tratamientos
     * @return objeto tratamiento
     */
    public function crearTratamiento($nombre, $observaciones, $status_tratamiento, $id_tratamiento) {
        //echo $status_tratamiento;


        $obj_tratamiento = new tratamiento();

        $obj_tratamiento->setNombre($nombre);
        $obj_tratamiento->setObservaciones($observaciones);
        $obj_tratamiento->setStatus_tratamiento($status_tratamiento);


        if (!is_null($id_tratamiento)) {

            $obj_tratamiento->setId_tratamiento($id_tratamiento);
        }

        return tratamientoDao::crearTratamiento($obj_tratamiento);
    }

    /**
     * Metodo que busca un tratamiento
     * @param string $nombre
     * @return obj tratamiento
     */
    public function getTratamientoPorid($nombre) {

        return tratamientoDao::getTratamientoPorid($nombre);
    }

    /**
     * Metodo que elimina un tratamiento
     * @param type $nombre
     * @return bolean
     */
    public function eliminarTratamiento($nombre) {

        return tratamientoDao::eliminarTratamiento($nombre);
    }

}
