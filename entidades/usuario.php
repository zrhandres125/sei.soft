<?php

/*
 * Las variables son los campos de la tabla usuarios
 */

class usuario {

    private $id_usuario;
    private $codigoUCC;
    private $nombres;
    private $apellidos;
    private $genero;
    private $telefono;
    private $email;
    private $privilegio;
    private $password;
    private $status_usuario;

    public function getId_usuario() {
        return $this->id_usuario;
    }

    public function setId_usuario($id_usuario) {
        $this->id_usuario = $id_usuario;
    }

    public function getCodigoUCC() {
        return $this->codigoUCC;
    }

    public function setCodigoUCC($codigoUCC) {
        $this->codigoUCC = $codigoUCC;
    }

    public function getNombres() {
        return $this->nombres;
    }

    public function setNombres($nombres) {
        $this->nombres = $nombres;
    }

    public function getApellidos() {
        return $this->apellidos;
    }

    public function setApellidos($apellidos) {
        $this->apellidos = $apellidos;
    }

    public function getGenero() {
        return $this->genero;
    }

    public function setGenero($genero) {
        $this->genero = $genero;
    }

    public function getTelefono() {
        return $this->telefono;
    }

    public function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getPrivilegio() {
        return $this->privilegio;
    }

    public function setPrivilegio($privilegio) {
        $this->privilegio = $privilegio;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function getStatus_usuario() {
        return $this->status_usuario;
    }

    public function setStatus_usuario($status_usuario) {
        $this->status_usuario = $status_usuario;
    }

}
