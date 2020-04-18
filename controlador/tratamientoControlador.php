<?php

include "datos/tratamientoDao.php";

//Capa que se comunica con la vista
class tratamientoControlador{
    
    
    /**
     * Lista todos los tratamientos registrados
     * @return obj tratamiento
     */
    public function getTratamientos() {
        
        return tratamientoDao::getTratamientos();
    }
    
    
    
    
    
    
    
    
    
    
    /**
     * Crea o actualiza un usuario desde el administrador
     * Datos de la tabla usuarios
     * @return objeto usuario
     */
    public function crearUsuario($codigoUCC, $nombres, $apellidos, $genero,
            $telefono, $email, $privilegio, $password, $status_usuario, $Id_usuario) {

        $obj_usuario = new usuario();

        $obj_usuario->setCodigoUCC($codigoUCC);
        $obj_usuario->setNombres($nombres);
        $obj_usuario->setApellidos($apellidos);
        $obj_usuario->setGenero($genero);
        $obj_usuario->setTelefono($telefono);
        $obj_usuario->setEmail($email);
        $obj_usuario->setPrivilegio($privilegio);
        $obj_usuario->setPassword($password);
        $obj_usuario->setStatus_usuario($status_usuario);

        if (!is_null($Id_usuario)) {

            $obj_usuario->setId_usuario($Id_usuario);
        }

        return usuarioDao::crearUsuario($obj_usuario);
    }
    
    
    /**
     * @param $codigoUCC
     * Busca un usuario por su codigo de estudiante
     * @return objeto de tipo usuario
     */
    public function getUsuarioPorid($codigoUCC) {
        
        return usuarioDao::getUsuarioPorid($codigoUCC);
        
    }
    
    
    /**
     * Metodo que elimina un usuario
     * @param type $codigoUCC
     * @return bolean
     */
    public function eliminarUsuario($codigoUCC) {
        
        return usuarioDao::eliminarUsuario($codigoUCC);
        
    }

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    /**
     * Obtiene los datos de usuario
     * @param type $usuario
     * @param type $password
     * @return type
     */
    /**public function registrarUsuario($nombre, $usuario, $email, $password, $privilegio) {
        
        $obj_usuario = new usuario();
        
        $obj_usuario->setNombre($nombre);
        $obj_usuario->setUsuario($usuario);
        $obj_usuario->setEmail($email);
        $obj_usuario->setPassword($password);
        $obj_usuario->setPrivilegio($privilegio);
        
        return usuarioDao::registrar_usuario($obj_usuario);
    }**/
    
    
    
}