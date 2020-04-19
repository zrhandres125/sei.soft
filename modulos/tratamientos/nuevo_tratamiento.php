<?php
include 'controlador/tratamientoControlador.php';
include 'helps/helps.php';

$tratamiento = null;

if (isset($_GET["nombre"])) {

    $nombre = validar_campo($_GET["nombre"]);
    $tratamiento = tratamientoControlador::getTratamientoPorid($nombre);
}
?>


<section class="section">
    <div class="container">
        <form action="?modulo=tratamientos/nuevo_tratamiento_logic" method="POST" name="frm_tratamiento" onsubmit="return validarTratamiento();" autocomplete="off">
            <div class="columns">
                <div class="column is-4 is-hidden-mobile">&nbsp;</div>
                <div class="column is-4">
                    <?php if (is_null($tratamiento)) { ?>
                        <h4 class="title is-4 has-text-grey-dark has-text-centered">Registro de tratamientos</h4>
                    <?php } else { ?>
                        <h4 class="title is-4 has-text-grey-dark has-text-centered">Editar tratamiento: <?php echo $tratamiento->getNombre(); ?></h4>
                        <input type="hidden" name="txtid_tratamiento" value="<?php echo $tratamiento->getId_tratamiento(); ?>">
                    <?php } ?> 

                    <div class="field">
                        <label class="label">Nombre</label>
                        <div class="control has-icons-right">
                            <input class="input is-hovered" type="text" name="txtn_tratamiento" id="txtn_tratamiento" 
                                   value="<?php echo is_null($tratamiento) ? "" : $tratamiento->getNombre() ?>" autofocus>
                            <span class="icon is-small is-right">
                                <i class="zmdi zmdi-collection-text"></i>
                            </span>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Observaciones</label>
                        <div class="control">
                            <textarea class="textarea is-hovered has-fixed-size has-text-justified" name="txtobs" id="txtobs"><?php echo is_null($tratamiento) ? "" : $tratamiento->getObservaciones() ?></textarea>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Status</label>
                        <div class="control">
                            <div class="select is-fullwidth">
                                <select name="sestado" id="sestado">
                                    <?php if (is_null($tratamiento)) { ?>
                                        <option selected value="">Elige una opcion</option>
                                        <option value="1">Activo</option>
                                        <option value="2">Inactivo</option>
                                    <?php } elseif ($tratamiento->getStatus_tratamiento() == '1') { ?>
                                        <option selected value="1">Activo</option>
                                        <option value="2">Inactivo</option>
                                    <?php } elseif ($tratamiento->getStatus_tratamiento() == '2') { ?>
                                        <option selected value="2">Inactivo</option>
                                        <option value="1">Activo</option>
                                    <?php } ?>    
                                </select>
                            </div>
                        </div>
                    </div>

                    <button class="button is-fullwidth is-info" style="margin-top: 20px;">
                        <span class="icon is-small">
                            <i class="zmdi zmdi-format-list-bulleted"></i>
                        </span>
                        <span>
                            <?php echo is_null($tratamiento) ? "Crear tratamiento" : "Editar tratamiento" ?>
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


<script type="text/javascript" src="assets/js/validar_frm_tratamiento.js"></script>