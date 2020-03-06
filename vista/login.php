<?php include ("partials/header.php"); ?>

<?php include ("partials/banner.php"); ?>

<div class="modal">
    <div class="modal-background"></div>
    <div class="modal-card">
        <header class="modal-card-head is-radiusless">
            <p class="modal-card-title">Registro</p>
            <button class="delete" aria-label="close"></button>
        </header>
        <form action="modulos/registro/registro_usuario.php">
            <section class="modal-card-body">
                <p class="has-text-left" style="margin-bottom: 10px;">
                    Confirme que su usuario no haya sido creado.
                </p>
                <div class="field is-horizontal">
                    <div class="field-label is-normal">
                        <label class="label">Código Ucc</label>
                    </div>
                    <div class="field-body">
                        <div class="field is-grouped">
                            <p class="control is-expanded has-icons-right">
                                <input class="input is-hovered" type="text" required>
                                <span class="icon is-small is-right">
                                    <i class="zmdi zmdi-account-circle"></i>
                                </span>
                            </p>
                            <p class="control">
                                <button class="button is-primary is-active">
                                    <span class="icon">
                                        <i class="zmdi zmdi-zoom-in"></i>
                                    </span>
                                    <span>Validar</span>
                                </button>
                            </p>
                        </div>
                    </div>
                </div>
            </section>
        </form>
    </div>
</div>

<section class="section">
    <div class="container">
        <div class="columns">
            <div class="column is-4 is-hidden-mobile">&nbsp;</div>
            <div class="column is-4 has-text-centered">
                <figure class="image is-128x128 is-inline-block">
                    <img src="assets/img/logo-ucc.png">
                </figure>
                <form action="validarCode.php" method="POST" role="form" id="loginForm">
                    <div class="field">
                        <label class="label has-text-left">Usuario</label>
                        <div class="control has-icons-right">
                            <input class="input is-hovered" type="text" name="txtUsuario" id="usuario" required autofocus>
                            <span class="icon is-small is-right">
                                <i class="zmdi zmdi-account"></i>
                            </span>
                        </div>
                        <p class="help has-text-left">Ingrese su código Ucc</p>
                    </div>

                    <div class="field">
                        <label class="label has-text-left">Contraseña</label>
                        <div class="control has-icons-right">
                            <input class="input is-hovered" type="password" id="password" name="txtPassword" required>
                            <span class="icon is-small is-right">
                                <i class="zmdi zmdi-lock"></i>
                            </span>
                        </div>
                        <p class="help has-text-left">Ingrese su contraseña</p>
                    </div>

                    <a href="modulos/recordatorio_clave/recordatorio.php" class="has-text-grey-dark">
                        ¿Olvido su contraseña?
                    </a>

                    <div class="field">
                        <p class="control" style="margin-top: 10px;">
                            <button class="button is-fullwidth is-primary is-active" type="submit">
                                Ingresar
                            </button>
                        </p>
                    </div>
                </form>
            </div>
            <div class="column is-4 is-hidden-mobile">&nbsp;</div>
        </div>
    </div>
</section>

<?php include "partials/footer.php"; ?>
