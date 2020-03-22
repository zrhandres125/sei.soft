<?php

include 'controlador/UsuarioControlador.php';
include 'helps/helps.php';



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["txtcodigoUcc"]) && isset($_POST["txtnombres"]) && isset($_POST["txtapellidos"]) && isset($_POST["sgenero"]) && isset($_POST["txttelefono"]) && isset($_POST["txtemail"]) && isset($_POST["srol"]) && isset($_POST["txtpassword"]) && isset($_POST["txtverificar"]) && isset($_POST["sestado"])) {

        $txtcodigoUcc = validar_campo($_POST["txtcodigoUcc"]);
        $txtnombres = validar_campo($_POST["txtnombres"]);
        $txtapellidos = validar_campo($_POST["txtapellidos"]);
        $sgenero = validar_campo($_POST["sgenero"]);
        $txttelefono = validar_campo($_POST["txttelefono"]);
        $txtemail = validar_campo($_POST["txtemail"]);
        $srol = validar_campo($_POST["srol"]);
        $txtpassword = validar_campo($_POST["txtpassword"]);
        $txtverificar = validar_campo($_POST["txtverificar"]);
        $sestado = validar_campo($_POST["sestado"]);


        echo 'Se envio todo con exito';
        ?>

        <script type="text/javascript">
            alert("Usuario creado con exito....");
            window.location.href = '?modulo=usuarios/listar_usuarios';
            
        </script>
        <?php

    }
} else {
    //header("location:crear_usuario_form.php?error=1");
    echo 'Variables vacias';
}?>