<?php include ("partials/header.php"); ?>

<?php include ("partials/banner.php"); ?>

<section class="section">
    <div class="container">
        <form action="#">
            <div class="columns">
                <div class="column is-1 is-hidden-mobile">&nbsp;</div>

                <div class="column is-4">
                    <h4 class="title is-4 has-text-grey-dark">Registro de usuarios</h4>
                    <div class="field">
                        <label class="label">Código Ucc</label>
                        <div class="control has-icons-right">
                            <input class="input is-hovered" type="text">
                            <span class="icon is-small is-right">
                                <i class="zmdi zmdi-accounts-list"></i>
                            </span>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Nombres</label>
                        <div class="control has-icons-right">
                            <input class="input is-hovered" type="text">
                            <span class="icon is-small is-right">
                                <i class="zmdi zmdi-collection-text"></i>
                            </span>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Primer apellido</label>
                        <div class="control has-icons-right">
                            <input class="input is-hovered" type="text">
                            <span class="icon is-small is-right">
                                <i class="zmdi zmdi-collection-item-1"></i>
                            </span>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Segundo apellido</label>
                        <div class="control has-icons-right">
                            <input class="input is-hovered" type="text">
                            <span class="icon is-small is-right">
                                <i class="zmdi zmdi-collection-item-2"></i>
                            </span>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Género</label>
                        <div class="control">
                            <div class="select is-fullwidth">
                                <select>
                                    <option>Seleccione</option>
                                    <option>Masculino</option>
                                    <option>Femenino</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="column is-2 is-hidden-mobile">&nbsp;</div>

                <div class="column is-4">
                    <div class="field">
                        <label class="label">Telefono</label>
                        <div class="control has-icons-right">
                            <input class="input is-hovered" type="text">
                            <span class="icon is-small is-right">
                                <i class="zmdi zmdi-email"></i>
                            </span>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">E-mail</label>
                        <div class="control has-icons-right">
                            <input class="input is-hovered" type="text">
                            <span class="icon is-small is-right">
                                <i class="zmdi zmdi-email"></i>
                            </span>
                        </div>
                    </div>

                    <h4 class="title is-4 has-text-grey-dark">
                        Credenciales de acceso
                    </h4>
                    <p class="has-text-left" style="margin-bottom: 7px;">
                        Tenga en cuenta que la contraseña debe tener entre 7 y 10 caracteres
                    </p>

                    <div class="field">
                        <label class="label">Contraseña</label>
                        <div class="control has-icons-right">
                            <input class="input is-hovered" type="text">
                            <span class="icon is-small is-right">
                                <i class="zmdi zmdi-key"></i>
                            </span>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Verificar</label>
                        <div class="control has-icons-right">
                            <input class="input is-hovered" type="text">
                            <span class="icon is-small is-right">
                                <i class="zmdi zmdi-key"></i>
                            </span>
                        </div>
                    </div>

                    <div class="field is-grouped" style="margin-top: 15px;">
                        <div class="control">
                            <button class="button is-primary is-active">
                                <span class="icon is-small">
                                    <i class="zmdi zmdi-accounts-add"></i>
                                </span>
                                <span>Crear cuenta</span>
                            </button>
                        </div>

                        <div class="control">
                            <a class="button is-primary is-active" href="login">
                                <span class="icon is-small">
                                    <i class="zmdi zmdi-close"></i>
                                </span>
                                <span>Cancelar</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="column is-1 is-hidden-mobile">&nbsp;</div>
            </div>
        </form>
    </div>
</section>

<?php include "partials/footer.php"; ?>