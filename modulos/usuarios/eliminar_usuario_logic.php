<?php

include 'controlador/UsuarioControlador.php';
include 'helps/helps.php';


if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET["codigoUCC"])) {

        $codigoUCC = validar_campo($_GET["codigoUCC"]);

        if (usuarioControlador::eliminarUsuario($codigoUCC)) {
            ?>
            <script type="text/javascript">
                alert('Usuario eliminado.');
                window.location.href = '?modulo=usuarios/listar_usuarios';
            </script>
            <?php

        } else {
            ?>
            <script type="text/javascript">
                alert('No se pudo eliminar el usuario.');
                window.location.href = '?modulo=usuarios/listar_usuarios';
            </script>
            <?php

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