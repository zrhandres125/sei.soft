<?php

include 'controlador/tratamientoControlador.php';
include 'helps/helps.php';



if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST["txtn_tratamiento"]) && isset($_POST["txtobs"]) && isset($_POST["sestado"])) {

        $txtn_tratamiento = validar_campo($_POST["txtn_tratamiento"]);
        $txtobs = validar_campo($_POST["txtobs"]);
        $sestado = validar_campo($_POST["sestado"]);

        if (isset($_POST["txtid_tratamiento"])) {
            if (tratamientoControlador::crearTratamiento($txtn_tratamiento, $txtobs, $sestado,
                            validar_campo($_POST["txtid_tratamiento"]))) {
                ?> 

                <script type="text/javascript">
                    alert('Tratamiento actualizado con exito.');
                    window.location.href = '?modulo=tratamientos/listar_tratamientos';
                </script>

                <?php

            } else {
                ?>

                <script type="text/javascript">
                    alert('No se pudo actualizar el tratamiento.');
                    window.location.href = '?modulo=tratamientos/listar_tratamientos';
                </script>

                <?php

            }
        } else {

            if (tratamientoControlador::crearTratamiento($txtn_tratamiento, $txtobs, $sestado, null)) {
                ?>
                <script type="text/javascript">
                    alert('Tratamiento creado con exito.');
                    window.location.href = '?modulo=tratamientos/listar_tratamientos';
                </script>
                <?php

            } else {
                ?>

                <script type="text/javascript">
                    alert('No se pudo crear el tratamiento.');
                    window.location.href = '?modulo=tratamientos/listar_tratamientos';
                </script>

                <?php

            }
        }
    } else {
        ?>

        <script type="text/javascript">
            alert('Error al recibir datos.');
            window.location.href = '?modulo=usuarios/listar_usuarios';
        </script> 

        <?php

    }
} else {
    ?>
    <script type="text/javascript">
        alert('Error al recibir datos.');
        window.location.href = '?modulo=tratamientos/listar_tratamientos';
    </script>        

    <?php

}