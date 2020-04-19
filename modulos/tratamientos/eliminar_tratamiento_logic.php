<?php

include 'controlador/tratamientoControlador.php';
include 'helps/helps.php';


if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET["nombre"])) {

        $nombre = validar_campo($_GET["nombre"]);

        if (tratamientoControlador::eliminarTratamiento($nombre)) {
            ?>
            <script type="text/javascript">
                alert('Tratamiento eliminado.');
                window.location.href = '?modulo=tratamientos/listar_tratamientos';
            </script>
            <?php

        } else {
            ?>
            <script type="text/javascript">
                alert('No es posible eliminar el tratamiento, esta enlazado con una UE.');
                window.location.href = '?modulo=tratamientos/listar_tratamientos';
            </script>
            <?php

        }
    }
} else {
    ?>
    <script type="text/javascript">
        alert('Error el recibir datos.');
        window.location.href = '?modulo=tratamientos/listar_tratamientos';
    </script>  
    <?php

}