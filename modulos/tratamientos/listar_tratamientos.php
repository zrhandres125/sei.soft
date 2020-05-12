<?php
include "controlador/tratamientoControlador.php";
include "helps/helps.php";

if ($_SESSION["usuario"]["privilegio"] == 1) {

    $filas = tratamientoControlador::getTratamientos();
    ?>

    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-4 has-text-centered">
                    <h4 class="title is-4 has-text-grey-dark">
                        <span class="icon is-small">
                            <i class="zmdi zmdi-format-list-bulleted"></i>
                        </span>
                        &nbsp; Modulo gestión tratamientos
                    </h4>
                </div>

                <div class="column is-4 is-hidden-mobile">&nbsp;</div>

                <div class="column is-4 has-text-centered">
                    <a class="button is-hovered is-fullwidth" href="?modulo=tratamientos/nuevo_tratamiento">
                        <span class="icon is-small">
                            <i class="zmdi zmdi-format-list-bulleted"></i>
                        </span>
                        <span>Agregar Tratamiento</span>
                    </a>
                </div>
            </div>


            <div class="columns" style="margin-top: 30px;">
                <div class="column is-12">
                    <div class="table-container">
                        <table class="table is-hoverable is-fullwidth" id="grid">
                            <thead>
                                <tr>
                                    <th class="has-text-centered">Nombre</th>
                                    <th class="has-text-centered">Observaciones</th>
                                    <th class="has-text-centered">Status</th>
                                    <th class="has-text-centered">Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($filas as $tratamiento) { ?>
                                    <tr>
                                        <td class="has-text-centered"> <?php echo $tratamiento['nombre']; ?> </td>
                                        <td class="has-text-centered"> <?php echo $tratamiento['observaciones']; ?> </td>
                                        <td class="has-text-centered"> <?php echo getStatus($tratamiento['status_tratamiento']); ?> </td>
                                        <td>
                                            <div class="buttons has-addons is-centered">
                                                <a class="button is-success is-active is-small" href='?modulo=tratamientos/nuevo_tratamiento&nombre=<?php echo $tratamiento['nombre']; ?>'>
                                                    <span class="icon is-small">
                                                        <i class="zmdi zmdi-edit"></i>
                                                    </span>
                                                </a>

                                                <a class="button is-danger is-active is-small" href="javascript:eliminar_tratamiento(confirm('¿Desea eliminar este tratamiento?'),'?modulo=tratamientos/eliminar_tratamiento_logic&nombre=<?php echo $tratamiento['nombre']; ?>');" >
                                                    <span class="icon is-small">
                                                        <i class="zmdi zmdi-close"></i>
                                                    </span>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script type="text/javascript">

        function eliminar_tratamiento(confirmacion, url) {

            if (confirmacion) {

                window.location.href = url;
            }

        }

    </script>

    <script type="text/javascript" src="assets/js/datatable.js"></script> 

<?php } else {
    ?>

    <script type="text/javascript">
        alert('No tiene permisos para ingresar a este módulo.');
        window.location.href = 'asistente';
    </script>

<?php }
?>


