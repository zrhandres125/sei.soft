<?php
include 'controlador/UsuarioControlador.php';
include 'helps/helps.php';

$usuario = null;

if (isset($_GET["codigoUCC"])) {

    $codigoUCC = validar_campo($_GET["codigoUCC"]);
    $usuario = UsuarioControlador::getUsuarioPorid($codigoUCC);
}
?>


<section class="section">
    <div class="container">
        <form action="?modulo=usuarios/nuevo_usuario_logic" method="POST" name="frm_usuarios" onsubmit="return validarUsuario();" autocomplete="off">
            <div class="columns">
                <div class="column is-1 is-hidden-mobile">&nbsp;</div>
                <div class="column is-4">
                    <?php if (is_null($usuario)) { ?>
                        <h4 class="title is-4 has-text-grey-dark">Registro de usuarios</h4>
                    <?php } else { ?>
                        <h4 class="title is-4 has-text-grey-dark">Editar usuario: <?php echo $usuario->getCodigoUCC() ?></h4>
                        <input type="hidden" name="txtid_usuario" value="<?php echo $usuario->getId_usuario(); ?>">
                    <?php } ?> 

                    <div class="field">
                        <label class="label">Código Ucc</label>
                        <div class="control has-icons-right">
                            <input class="input is-hovered" type="number" name="txtcodigoUcc" id="txtcodigoUcc" autofocus
                                   value="<?php echo is_null($usuario) ? "" : $usuario->getCodigoUCC() ?>" 
                                   <?php if (!is_null($usuario)) { ?> readonly <?php } ?>>
                            <span class="icon is-small is-right">
                                <i class="zmdi zmdi-accounts-list"></i>
                            </span>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Nombres</label>
                        <div class="control has-icons-right">
                            <input class="input is-hovered" type="text" name="txtnombres" id="txtnombres" 
                                   value="<?php echo is_null($usuario) ? "" : $usuario->getNombres() ?>" >
                            <span class="icon is-small is-right">
                                <i class="zmdi zmdi-collection-text"></i>
                            </span>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Apellidos</label>
                        <div class="control has-icons-right">
                            <input class="input is-hovered" type="text" name="txtapellidos" id="txtapellidos"
                                   value="<?php echo is_null($usuario) ? "" : $usuario->getApellidos() ?>" >
                            <span class="icon is-small is-right">
                                <i class="zmdi zmdi-collection-text"></i>
                            </span>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Género</label>
                        <div class="control">
                            <div class="select is-fullwidth">
                                <select name="sgenero" id="sgenero">
                                    <?php if (is_null($usuario)) { ?>
                                        <option selected value="">Elige una opcion</option>
                                        <option value="M">Masculino</option>
                                        <option value="F">Femenino</option>
                                    <?php } elseif ($usuario->getGenero() == 'M') { ?>
                                        <option selected value="M">Masculino</option>
                                        <option value="F">Femenino</option>
                                    <?php } elseif ($usuario->getGenero() == 'F') { ?> 
                                        <option selected value="F">Femenino</option>
                                        <option value="M">Masculino</option>
                                    <?php } ?>    
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Telefono</label>
                        <div class="control has-icons-right">
                            <input class="input is-hovered" type="number" name="txttelefono" id="txttelefono" 
                                   value="<?php echo is_null($usuario) ? "" : $usuario->getTelefono() ?>" >
                            <span class="icon is-small is-right">
                                <i class="zmdi zmdi-account-box-phone"></i>
                            </span>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">E-mail</label>
                        <div class="control has-icons-right">
                            <input class="input is-hovered" type="text" name="txtemail" id="txtemail" 
                                   value="<?php echo is_null($usuario) ? "" : $usuario->getEmail() ?>" >
                            <span class="icon is-small is-right">
                                <i class="zmdi zmdi-email"></i>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="column is-2 is-hidden-mobile">&nbsp;</div>

                <div class="column is-4">
                    <div class="field">
                        <label class="label">Permiso acceso</label>
                        <div class="control">
                            <div class="select is-fullwidth">
                                <select name="srol" id="srol">
                                    <?php if (is_null($usuario)) { ?>
                                        <option selected value="">Elige una opcion</option>
                                        <option value="1">Administrador</option>
                                        <option value="2">Asistente</option>
                                    <?php } elseif ($usuario->getPrivilegio() == '1') { ?> 
                                        <option selected value="1">Administrador</option>
                                        <option value="2">Asistente</option>
                                    <?php } elseif ($usuario->getPrivilegio() == '2') { ?>
                                        <option selected value="2">Asistente</option>
                                        <option value="1">Administrador</option>
                                    <?php } ?>    
                                </select>
                            </div>
                        </div>
                    </div>

                    <h4 class="title is-4 has-text-grey-dark" style="margin-top: 20px;">
                        Credenciales de acceso
                    </h4>
                    <p class="has-text-left" style="margin-bottom: 10px;">
                        Tenga en cuenta que la contraseña debe tener entre 7 y 10 caracteres
                    </p>

                    <div class="field">
                        <label class="label">Contraseña</label>
                        <div class="control has-icons-right">
                            <input class="input is-hovered" type="password" name="txtpassword" id="txtpassword"
                                   value="<?php echo is_null($usuario) ? "" : $usuario->getPassword() ?>" >
                            <span class="icon is-small is-right">
                                <i class="zmdi zmdi-key"></i>
                            </span>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Verificar</label>
                        <div class="control has-icons-right">
                            <input class="input is-hovered" type="password" name="txtverificar" id="txtverificar"
                                   value="<?php echo is_null($usuario) ? "" : $usuario->getPassword() ?>">
                            <span class="icon is-small is-right">
                                <i class="zmdi zmdi-key"></i>
                            </span>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Status</label>
                        <div class="control">
                            <div class="select is-fullwidth">
                                <select name="sestado" id="sestado">
                                    <?php if (is_null($usuario)) { ?>
                                        <option selected value="">Elige una opcion</option>
                                        <option value="1">Activo</option>
                                        <option value="2">Inactivo</option>
                                    <?php } elseif ($usuario->getStatus_usuario() == '1') { ?>
                                        <option selected value="1">Activo</option>
                                        <option value="2">Inactivo</option>
                                    <?php } elseif ($usuario->getStatus_usuario() == '2') { ?>
                                        <option selected value="2">Inactivo</option>
                                        <option value="1">Activo</option>
                                    <?php } ?>    
                                </select>
                            </div>
                        </div>
                    </div>

                    <button class="button is-fullwidth is-info" style="margin-top: 10px;">
                        <span class="icon is-small">
                            <i class="zmdi zmdi-accounts-add"></i>
                        </span>
                        <span>
                            <?php echo is_null($usuario) ? "Crear cuenta" : "Editar usuario" ?>
                        </span>
                    </button>
                    <a class="button is-fullwidth is-warning" href="?modulo=usuarios/listar_usuarios" style="margin-top: 10px;">
                        <span class="icon is-small">
                            <i class="zmdi zmdi-close"></i>
                        </span>
                        <span>Cancelar</span>
                    </a>
                </div>
                <div class="column is-1 is-hidden-mobile">&nbsp;</div>
            </div>
        </form>
    </div>
</section>

<script type="text/javascript" src="assets/js/validar_frm_usuario.js"></script>