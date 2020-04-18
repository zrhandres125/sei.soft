<?php
include 'controlador/UsuarioControlador.php';
include 'helps/helps.php';

$tratamiento = null;

if (isset($_GET["nombre"])) {

    $nombre = validar_campo($_GET["nombre"]);
    $tratamiento = UsuarioControlador::getUsuarioPorid($nombre);
}
?>


<section class="section">
    <div class="container">
        <form action="?page=tratamientos/insertarTratamiento" method="POST" id="form1">
            <div class="columns">
                <div class="column is-4 is-hidden-mobile">&nbsp;</div>
                <div class="column is-4">
                    <h4 class="title is-4 has-text-grey-dark has-text-centered">Registro de tratamientos</h4>
                    <div class="field">
                        <label class="label">Nombre</label>
                        <div class="control has-icons-right">
                            <input class="input is-hovered" type="text" name="nombre" id="nombre" required>
                            <span class="icon is-small is-right">
                                <i class="zmdi zmdi-collection-text"></i>
                            </span>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Observaciones</label>
                        <div class="control">
                            <textarea class="textarea is-hovered has-fixed-size" name="observaciones" id="observaciones" required></textarea>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Status</label>
                        <div class="control">
                            <div class="select is-fullwidth">
                                <select name="status_tratamiento" id="status_tratamiento">
                                    <option selected value="1">Activo</option>
                                    <option value="0">Inactivo</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <button class="button is-fullwidth is-info" style="margin-top: 20px;">
                        <span class="icon is-small">
                            <i class="zmdi zmdi-format-list-bulleted"></i>
                        </span>
                        <span>
                            <?php echo is_null($usuario) ? "Crear tratamiento" : "Editar tratamiento" ?>
                        </span>
                    </button>

                    <a class="button is-fullwidth is-warning" href="?modulo=tratamientos/listar_tratamientos" style="margin-top: 10px;">
                        <span class="icon is-small">
                            <i class="zmdi zmdi-close"></i>
                        </span>
                        <span>Cancelar</span>
                    </a>
                </div>
                <div class="column is-4 is-hidden-mobile">&nbsp;</div>
            </div>
        </form>
    </div>
</section>