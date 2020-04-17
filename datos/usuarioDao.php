<?php

include "conexion.php";
include "entidades/usuario.php";

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

        $query = "SELECT * FROM usuarios WHERE codigoUCC = :usuario AND password = :password AND status_usuario = 1";

        self::getConexion();

        $resultado = self::$cnx->prepare($query);

        $user = $usuario->getCodigoUCC();
        $clave = $usuario->getPassword();

        $resultado->bindParam(":usuario", $user);
        $resultado->bindParam(":password", $clave);


        $resultado->execute();

        if ($resultado->rowCount() > 0) {
            $filas = $resultado->fetch();
            if ($filas["codigoUCC"] == $usuario->getCodigoUCC() && $filas["password"] == $usuario->getPassword()) {
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

        $query = "SELECT id_usuario, codigoUCC, nombres, apellidos, genero, "
                . "telefono, email, privilegio, status_usuario FROM usuarios "
                . "WHERE codigoUCC = :usuario AND password = :password";

        self::getConexion();

        $resultado = self::$cnx->prepare($query);

        $user = $usuario->getCodigoUCC();
        $clave = $usuario->getPassword();

        $resultado->bindParam(":usuario", $user);
        $resultado->bindParam(":password", $clave);

        $resultado->execute();

        $filas = $resultado->fetch();

        $usuario = new usuario();
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
     * Metodo que sirve para listar todos los usuarios
     * @param object $usuario
     * @return object
     */
    public static function getUsuarios() {

        $query = "SELECT id_usuario, codigoUCC, CONCAT(nombres,' ',apellidos) AS "
                . "usuario, genero, telefono, email, privilegio, status_usuario FROM usuarios";

        self::getConexion();

        $resultado = self::$cnx->prepare($query);

        $resultado->execute();

        //Obtiene toda la lista de datos que ejecuta el select
        $filas = $resultado->fetchAll();

        return $filas;
    }

    /**
     * Metodo que registra los usuarios desde el administrador o los actualiza
     * @param object $usuario
     * @return boolean 1 registra y 2 no registra
     */
    public static function crearUsuario($usuario) {

        //valida que venga el id para proceder a actualizar
        if (is_null($usuario->getId_usuario())) {

            $query = "INSERT INTO usuarios (codigoUCC, nombres, apellidos, genero, telefono, email, privilegio, password, status_usuario)"
                    . " VALUES (:codigoUCC, :nombres, :apellidos, :genero, :telefono, :email, :privilegio, :password, :status_usuario)";
        } else {

            $query = "UPDATE usuarios SET codigoUCC=:codigoUCC, nombres=:nombres, apellidos=:apellidos, genero=:genero, telefono=:telefono,"
                    . "email=:email, privilegio=:privilegio, password=:password, status_usuario=:status_usuario"
                    . " WHERE Id_usuario=:Id_usuario";
        }


        self::getConexion();

        $resultado = self::$cnx->prepare($query);

        $codigoUCC = $usuario->getCodigoUCC();
        $nombres = $usuario->getNombres();
        $apellidos = $usuario->getApellidos();
        $genero = $usuario->getGenero();
        $telefono = $usuario->getTelefono();
        $email = $usuario->getEmail();
        $privilegio = $usuario->getPrivilegio();
        $password = $usuario->getPassword();
        $status_usuario = $usuario->getStatus_usuario();


        if (!is_null($usuario->getId_usuario())) {

            $Id_usuario = $usuario->getId_usuario();
            $resultado->bindParam(":Id_usuario", $Id_usuario);
        }

        $resultado->bindParam(":codigoUCC", $codigoUCC);
        $resultado->bindParam(":nombres", $nombres);
        $resultado->bindParam(":apellidos", $apellidos);
        $resultado->bindParam(":genero", $genero);
        $resultado->bindParam(":telefono", $telefono);
        $resultado->bindParam(":email", $email);
        $resultado->bindParam(":privilegio", $privilegio);
        $resultado->bindParam(":password", $password);
        $resultado->bindParam(":status_usuario", $status_usuario);

        if ($resultado->execute()) {
            return true;
        }

        return false;
    }

    /**
     * Metodo que sirve para buscar un usuario por su codigoUcc, esto con el fin
     * de cargar el formulario para su posterior actualizacion
     * @param object $usuario
     * @return object
     */
    public static function getUsuarioPorid($codigoUCC) {

        $query = "SELECT id_usuario, codigoUCC, nombres, apellidos, genero, telefono, email, "
                . "privilegio, password, status_usuario FROM usuarios WHERE codigoUCC = :codigoUCC";

        self::getConexion();

        $resultado = self::$cnx->prepare($query);

        //Cambios para implementar 14.03.20 en el proyecto       
        $resultado->bindParam(":codigoUCC", $codigoUCC);

        $resultado->execute();

        $filas = $resultado->fetch();

        $usuario = new usuario();
        $usuario->setId_usuario($filas["id_usuario"]);
        $usuario->setCodigoUCC($filas["codigoUCC"]);
        $usuario->setNombres($filas["nombres"]);
        $usuario->setApellidos($filas["apellidos"]);
        $usuario->setGenero($filas["genero"]);
        $usuario->setTelefono($filas["telefono"]);
        $usuario->setEmail($filas["email"]);
        $usuario->setPrivilegio($filas["privilegio"]);
        $usuario->setPassword($filas["password"]);
        $usuario->setStatus_usuario($filas["status_usuario"]);

        return $usuario;
    }

    /**
     * Metodo que sirve para eliminar un usuario
     * @param object $usuario
     * @return boolean
     */
    public static function eliminarUsuario($codigoUCC) {

        $query = "DELETE FROM usuarios WHERE codigoUCC = :codigoUCC";

        self::getConexion();

        $resultado = self::$cnx->prepare($query);

        //Cambios para implementar 14.03.20 en el proyecto       
        $resultado->bindParam(":codigoUCC", $codigoUCC);

        $resultado->execute();

        if ($resultado->execute()) {
            return true;
        }

        return false;
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

    /**
     * Metodo que registra los usuarios desde el login
     * @param object $usuario
     * @return boolean 1 registra y 2 no registra
     */
    /*     * public static function registrar_usuario($usuario) {
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
      }* */
}
