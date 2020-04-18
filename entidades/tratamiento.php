<?php

/*
 * Las variables son los campos de la tabla usuarios
 */

class tratamiento {

    private $id_tratamiento;
    private $nombre;
    private $observaciones;
    private $status_tratamiento;

    public function getId_tratamiento() {
        return $this->id_tratamiento;
    }

    public function setId_tratamiento($id_tratamiento) {
        $this->id_tratamiento = $id_tratamiento;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getObservaciones() {
        return $this->observaciones;
    }

    public function setObservaciones($observaciones) {
        $this->observaciones = $observaciones;
    }

    public function getStatus_tratamiento() {
        return $this->status_tratamiento;
    }

    public function setStatus_tratamiento($status_tratamiento) {
        $this->status_tratamiento = $status_tratamiento;
    }

}
