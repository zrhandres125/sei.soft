<?php

include "../controlador/usuarioControlador.php";
include "../helps/helps.php";

session_start();

header("Content-Type: application/json");
$resultado = array();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST["txtUsuario"]) && isset($_POST["txtPassword"])) {

        $txtUsuario = validar_campo($_POST["txtUsuario"]);
        $txtPassword = validar_campo($_POST["txtPassword"]);

        $resultado = array("estado" => "true");

        if (usuarioControlador::login($txtUsuario, $txtPassword)) {
            $usuario = usuarioControlador::getUsuario($txtUsuario, $txtPassword);
            $_SESSION["usuario"] = array(
                "id_usuario" => $usuario->getId_usuario(),
                "usuario" => $usuario->getCodigoUCC(),
                "nombres" => $usuario->getNombres(),
                "apellidos" => $usuario->getApellidos(),
                "genero" => $usuario->getGenero(),
                "telefono" => $usuario->getTelefono(),
                "email" => $usuario->getEmail(),
                "privilegio" => $usuario->getPrivilegio(),
                "status_usuario" => $usuario->getStatus_usuario(),
            );
            return print(json_encode($resultado));
        }
    }
}


$resultado = array("estado" => "false");
return print(json_encode($resultado));
//echo "Usuario no encontrado";
