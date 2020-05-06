<?php

include 'controlador/UsuarioControlador.php';
include 'helps/helps.php';


//sleep(1);



if (isset($_POST["txtcodigoUcc"])) {

    $txtcodigoUcc = (string) validar_campo($_POST["txtcodigoUcc"]);

    $fila = usuarioControlador::getDisponibilidadUsuario($txtcodigoUcc);

    if ($fila == true) {
        echo '<div class="alert alert-danger"><strong>Oh no!</strong> Nombre de usuario no disponible.</div>';
    }
}
    
    
    
    




/*if (isset($_POST)) {
    $username = (string) $_POST['username'];

    $result = $connexion->query(
            'SELECT * FROM usuarios WHERE codigoUCC = "' . strtolower($username) . '"'
    );

    if ($result->num_rows > 0) {
        echo '<div class="alert alert-danger"><strong>Oh no!</strong> Nombre de usuario no disponible.</div>';
        //echo '<script type=\"text/javascript\">alert("Fotos guardadas");</script>';
    } else {
        echo '<div class="alert alert-success"><strong>Enhorabuena!</strong> Usuario disponible.</div>';
    }
}*/