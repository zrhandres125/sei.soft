<?php

include 'controlador/UsuarioControlador.php';
include 'helps/helps.php';



$user = $_POST['b'];

if (!empty($user)) {
    comprobar($user);
}

function comprobar($b) {
    $con = mysql_connect('localhost', 'root', '');
    mysql_select_db('sei_sw', $con);

    $sql = mysql_query("SELECT * FROM usuarios WHERE codigoUCC = '" . $b . "'", $con);

    $contar = mysql_num_rows($sql);

    if ($contar == 0) {
        echo "<span style='font-weight:bold;color:green;'>Disponible.</span>";
    } else {
        echo "<span style='font-weight:bold;color:red;'>El nombre de usuario ya existe.</span>";
    }
}

/*$user = $_POST['b'];

if (!empty($user)) {
    comprobar($user);
}

function comprobar($usu) {

    $fila = usuarioControlador::getDisponibilidadUsuario($usu);

    if ($fila === true) {
        echo "<span style='font-weight:bold;color:red;'>El nombre de usuario ya existe.</span>";
    }
}*/
