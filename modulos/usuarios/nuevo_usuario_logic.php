<?php

include 'controlador/UsuarioControlador.php';
include 'helps/helps.php';



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["txtcodigoUcc"]) && isset($_POST["txtnombres"]) &&
            isset($_POST["txtapellidos"]) && isset($_POST["sgenero"]) &&
            isset($_POST["txttelefono"]) && isset($_POST["txtemail"]) &&
            isset($_POST["srol"]) && isset($_POST["txtpassword"]) &&
            isset($_POST["sestado"])) {

        $txtcodigoUcc = validar_campo($_POST["txtcodigoUcc"]);
        $txtnombres = validar_campo($_POST["txtnombres"]);
        $txtapellidos = validar_campo($_POST["txtapellidos"]);
        $sgenero = validar_campo($_POST["sgenero"]);
        $txttelefono = validar_campo($_POST["txttelefono"]);
        $txtemail = validar_campo($_POST["txtemail"]);
        $srol = validar_campo($_POST["srol"]);
        $txtpassword = validar_campo($_POST["txtpassword"]);
        $sestado = validar_campo($_POST["sestado"]);


        if (isset($_POST["txtid_usuario"])) {
            if (UsuarioControlador::crearUsuario($txtcodigoUcc, $txtnombres, $txtapellidos,
                            $sgenero, $txttelefono, $txtemail, $srol, $txtpassword, $sestado, validar_campo($_POST["txtid_usuario"]))) {
                ?> 

                <script type="text/javascript">
                    alert('Usuario actualizado con exito.');
                    window.location.href = '?modulo=usuarios/listar_usuarios';
                </script>

                <?php

            }
        } else {

            if (UsuarioControlador::crearUsuario($txtcodigoUcc, $txtnombres, $txtapellidos,
                            $sgenero, $txttelefono, $txtemail, $srol, $txtpassword, $sestado, null)) {
                ?>
                <script type="text/javascript">
                    alert('Usuario creado con exito.');
                    window.location.href = '?modulo=usuarios/listar_usuarios';
                </script>
                <?php

            } else {
                ?>

                <script type="text/javascript">
                    alert('No se pudo crear el usuario.');
                    window.location.href = '?modulo=usuarios/listar_usuarios';
                </script>

                <?php

            }
        }
    }
} else {
    ?>
    <script type="text/javascript">
        alert('Error el recibir datos.');
        window.location.href = '?modulo=usuarios/listar_usuarios';
    </script>        

    <?php

}