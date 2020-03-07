<?php

include "datos/usuarioDao.php";

//Capa que se comunica con la vista
class usuarioControlador{
    
    public static function login($usuario, $password){
        
        $obj_usuario = new usuario();
        
        $obj_usuario->setCodigoUCC($usuario);
        $obj_usuario->setPassword($password);
        
        return usuarioDao::login($obj_usuario);
        
    }
    
    /**
     * Obtiene los datos de usuario
     * @param type $usuario
     * @param type $password
     * @return type
     */
    public function getUsuario($usuario, $password) {
        
        $obj_usuario = new usuario();
        
        $obj_usuario->setCodigoUCC($usuario);
        $obj_usuario->setPassword($password);
        
        return usuarioDao::getUsuario($obj_usuario);
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