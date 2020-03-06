<?php

include "conexion.php";
include "../entidades/usuarios.php";

// Objeto de acceso a datos (Data access object), se comunica con la bd
class usuarioDao extends conexion {

    // Variable de conexion
    protected static $cnx;

    private static function getConexion() {

        self::$cnx = conexion::conectar();
    }

    private static function desconectar() {

        self::$cnx = null;
    }

    /**
     * Metodo que valida el login
     * @param object $usuario
     * @return boolean 1 existe y 0 no existe
     */
    public static function login($usuario) {

        $query = "SELECT * FROM usuarios WHERE codigoUCC :usuario AND password = :password";

        self::getConexion();

        $resultado = self::$cnx->prepare($query);

        $resultado->bindValue(":usuario", $usuario->getCodigoUCC());
        $resultado->bindValue(":password", $usuario->getPassword());

        $resultado->execute();

        if ($resultado->rowCount() > 0) {
            $filas = $resultado->fetch();
            if ($filas["usuario"] == $usuario->getCodigoUCC() && $filas["password"] == $usuario->getPassword()) {
                return true;
            }
        }

        return false;
    }

    /**
     * Metodo que sirve para obtener un usuario
     * @param object $usuario
     * @return object
     */
    public static function getUsuario($usuario) {

        $query = "SELECT id_usuario, codigoUCC, nombres, apellidos, genero, telefono, email, privilegio, status_usuario FROM usuarios WHERE codigoUCC = :usuario AND password = :password";

        self::getConexion();

        $resultado = self::$cnx->prepare($query);

        $resultado->bindValue(":usuario", $usuario->getCodigoUCC());
        $resultado->bindValue(":password", $usuario->getPassword());

        $resultado->execute();

        $filas = $resultado->fetch();

        $usuario = new usuarios();
        $usuario->setId_usuario($filas["id_usuario"]);
        $usuario->setCodigoUCC($filas["codigoUCC"]);
        $usuario->setNombres($filas["nombres"]);
        $usuario->setApellidos($filas["apellidos"]);
        $usuario->setGenero($filas["genero"]);
        $usuario->setTelefono($filas["telefono"]);
        $usuario->setEmail($filas["email"]);
        $usuario->setPrivilegio($filas["privilegio"]);
        $usuario->setStatus_usuario($filas["status_usuario"]);

        return $usuario;
    }

    /**
     * Metodo que registra los usuarios desde el login
     * @param object $usuario
     * @return boolean 1 registra y 2 no registra
     */
    /**public static function registrar_usuario($usuario) {
        $query = "INSERT INTO usuarios (nombre,usuario,email,password,privilegio) VALUES (:nombre,:usuario,:email,:password,:privilegio)";
        
        self::getConexion();

        $resultado = self::$cnx->prepare($query);
        
        $resultado->bindValue(":nombre", $usuario->getNombre());
        $resultado->bindValue(":usuario", $usuario->getCodigoUCC());
        $resultado->bindValue(":email", $usuario->getEmail());
        $resultado->bindValue(":password", $usuario->getPassword());
        $resultado->bindValue(":privilegio", $usuario->getPrivilegio());
        
        if($resultado->execute()){
            return true;
        }
        
        return false;
    }**/

}

