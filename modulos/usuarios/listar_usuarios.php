<?php
include "controlador/usuarioControlador.php";
include "helps/helps.php";

$filas = usuarioControlador::getUsuarios();
?>

<section class="section">
    <div class="container">
        <div class="columns">
            <div class="column is-4 has-text-centered">
                <h4 class="title is-4 has-text-grey-dark">
                    <span class="icon is-small">
                        <i class="zmdi zmdi-account"></i>
                    </span>
                    &nbsp; Modulo gestión usuarios
                </h4>
            </div>
            
            <div class="column is-4 is-hidden-mobile">&nbsp;</div>
                
            <div class="column is-4 has-text-centered">
                <a class="button is-hovered is-fullwidth" href="?modulo=usuarios/nuevo_usuario">
                    <span class="icon is-small">
                        <i class="zmdi zmdi-account-add"></i>
                    </span>
                    <span>Agregar usuario</span>
                </a>
            </div>
        </div>

        <div class="columns" style="margin-top: 30px;">
            <div class="column is-12">
                <div class="table-container">
                    <table class="table is-hoverable is-fullwidth" id="usuarios">
                        <thead>
                            <tr>
                                <th class="has-text-centered">Código</th>
                                <th class="has-text-centered">Usuario</th>
                                <th class="has-text-centered">Género</th>
                                <th class="has-text-centered">Teléfono</th>
                                <th class="has-text-centered">E-mail</th>
                                <th class="has-text-centered">Rol</th>
                                <th class="has-text-centered">Status</th>
                                <th class="has-text-centered">Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($filas as $usuario) { ?>
                                <tr>
                                    <td class="has-text-centered"> <?php echo $usuario['codigoUCC']; ?> </td>
                                    <td class="has-text-centered"> <?php echo $usuario['usuario']; ?> </td>
                                    <td class="has-text-centered"> <?php echo $usuario['genero']; ?> </td>
                                    <td class="has-text-centered"> <?php echo $usuario['telefono']; ?> </td>
                                    <td class="has-text-centered"> <?php echo $usuario['email']; ?> </td>
                                    <td class="has-text-centered"> <?php echo getPrivilegio($usuario['privilegio']); ?> </td>
                                    <td class="has-text-centered"> <?php echo getStatus($usuario['status_usuario']); ?> </td>
                                    <td>
                                        <div class="buttons has-addons is-centered">
                                            <a class="button is-success is-active is-small" href='?modulo=usuarios/nuevo_usuario&codigoUCC=<?php echo $usuario['codigoUCC'] ?>'>
                                                <span class="icon is-small">
                                                    <i class="zmdi zmdi-edit"></i>
                                                </span>
                                            </a>

                                            <a class="button is-danger is-active is-small" href="javascript:eliminar_usuario(confirm('¿Desea eliminar este usuario?'),'?modulo=usuarios/eliminar_usuario_logic&codigoUCC=<?php echo $usuario['codigoUCC'] ?>');" >
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

    function eliminar_usuario(confirmacion, url) {

        if (confirmacion) {

            window.location.href = url;
        }

    }

</script>



<script type="text/javascript">
    $(document).ready(function () {
        $('#usuarios').DataTable({
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
            }
        });
    });
</script> 




