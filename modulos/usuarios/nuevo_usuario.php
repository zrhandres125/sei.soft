<section class="section">
    <div class="container">
        <form action="?modulo=usuarios/nuevo_usuario_logic" method="POST" name="frm_usuarios" onsubmit="return validarUsuario();" autocomplete="off">
            <div class="columns">
                <div class="column is-1 is-hidden-mobile">&nbsp;</div>
                <div class="column is-4">
                    <h4 class="title is-4 has-text-grey-dark">Registro de usuarios</h4>
                    <div class="field">
                        <label class="label">Código Ucc</label>
                        <div class="control has-icons-right">
                            <input class="input is-hovered" type="number" name="txtcodigoUcc" id="txtcodigoUcc" autofocus>
                            <span class="icon is-small is-right">
                                <i class="zmdi zmdi-accounts-list"></i>
                            </span>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Nombres</label>
                        <div class="control has-icons-right">
                            <input class="input is-hovered" type="text" name="txtnombres" id="txtnombres">
                            <span class="icon is-small is-right">
                                <i class="zmdi zmdi-collection-text"></i>
                            </span>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Apellidos</label>
                        <div class="control has-icons-right">
                            <input class="input is-hovered" type="text" name="txtapellidos" id="txtapellidos">
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
                                    <option selected value="">Elige una opcion</option>
                                    <option value="M">Masculino</option>
                                    <option value="F">Femenino</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Telefono</label>
                        <div class="control has-icons-right">
                            <input class="input is-hovered" type="number" name="txttelefono" id="txttelefono">
                            <span class="icon is-small is-right">
                                <i class="zmdi zmdi-account-box-phone"></i>
                            </span>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">E-mail</label>
                        <div class="control has-icons-right">
                            <input class="input is-hovered" type="text" name="txtemail" id="txtemail">
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
                                    <option selected value="">Elige una opcion</option>
                                    <option value="1">Administrador</option>
                                    <option value="2">Asistente</option>
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
                            <input class="input is-hovered" type="password" name="txtpassword" id="txtpassword">
                            <span class="icon is-small is-right">
                                <i class="zmdi zmdi-key"></i>
                            </span>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Verificar</label>
                        <div class="control has-icons-right">
                            <input class="input is-hovered" type="password" name="txtverificar" id="txtverificar">
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
                                    <option selected value="">Elige una opcion</option>
                                    <option value="1">Activo</option>
                                    <option value="2">Inactivo</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    
                    <button class="button is-fullwidth is-info" style="margin-top: 10px;">
                        <span class="icon is-small">
                            <i class="zmdi zmdi-accounts-add"></i>
                        </span>
                        <span>Crear cuenta</span>
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