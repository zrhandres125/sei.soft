<nav class="navbar is-primary is-fixed-top" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a class="navbar-item">
            <span class="icon is-small" style="margin-left: 10px">
                <i class="zmdi zmdi-tablet-android zmdi-hc-2x"></i>
            </span>
            <p class="has-text-weight-semibold is-size-7-mobile" style="margin-left: 10px">
                Sistema evaluación indicadores
            </p>
        </a>

        <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a>
    </div>

    <div id="navbarBasicExample" class="navbar-menu">
        <div class="navbar-start">

            <?php if ($_SESSION["usuario"]["privilegio"] == 1) { ?>
            <a class="navbar-item" href="administrador">
                    <span class="icon is-small">
                        <i class="zmdi zmdi-home"></i>
                    </span>
                    &nbsp; Inicio
                </a>

                <a class="navbar-item" href="?modulo=usuarios/listar_usuarios">
                    <span class="icon is-small">
                        <i class="zmdi zmdi-account"></i>
                    </span>
                    &nbsp; Usuarios
                </a>

                <a class="navbar-item" href="?modulo=tratamientos/listar_tratamientos">
                    <span class="icon is-small">
                        <i class="zmdi zmdi-format-list-bulleted"></i>
                    </span>
                    &nbsp; Tratamientos
                </a>

                <a class="navbar-item" href="?page=gestion_ue/listarUe">
                    <span class="icon is-small">
                        <i class="zmdi zmdi-folder"></i>
                    </span>
                    &nbsp; Gestión UE
                </a>

                <div class="navbar-item has-dropdown is-hoverable">

                    <a class="navbar-item navbar-link">
                        <span class="icon is-small">
                            <i class="zmdi zmdi-assignment-o"></i>
                        </span>
                        &nbsp; Indicadores
                    </a>

                    <div class="navbar-dropdown">
                        <a class="navbar-item" href="?page=ind_bienestar/indBienestar">
                            <span class="icon is-small">
                                <i class="zmdi zmdi-assignment"></i>
                            </span>
                            &nbsp; Bienestar
                        </a>

                        <a class="navbar-item" href="?page=ind_calidadh/indCalidad">
                            <span class="icon is-small">
                                <i class="zmdi zmdi-book"></i>
                            </span>
                            &nbsp; Calidad del huevo
                        </a>
                        <a class="navbar-item" href="?page=ind_productividad/indProductividad">
                            <span class="icon is-small">
                                <i class="zmdi zmdi-archive"></i>
                            </span>
                            &nbsp; Productividad
                        </a>
                    </div>
                </div>

                <a class="navbar-item" href="#">
                    <span class="icon is-small">
                        <i class="zmdi zmdi-ruler"></i>
                    </span>
                    &nbsp; Reportes
                </a>
            <?php } else { ?>

                <a class="navbar-item" href="asistente.php">
                    <span class="icon is-small">
                        <i class="zmdi zmdi-home"></i>
                    </span>
                    &nbsp; Inicio
                </a>

                <a class="navbar-item" href="?page=ind_bienestar/indBienestar">
                    <span class="icon is-small">
                        <i class="zmdi zmdi-assignment"></i>
                    </span>
                    &nbsp; Indicadores bienestar
                </a>

                <a class="navbar-item" href="?page=ind_calidadh/indCalidad">
                    <span class="icon is-small">
                        <i class="zmdi zmdi-book"></i>
                    </span>
                    &nbsp; Indicadores calidad del huevo
                </a>

                <a class="navbar-item" href="?page=ind_productividad/indProductividad">
                    <span class="icon is-small">
                        <i class="zmdi zmdi-archive"></i>
                    </span>
                    &nbsp; Indicadores productividad
                </a>
            <?php } ?>
        </div>

        <div class="navbar-end">
            <div class="navbar-item">
                <div class="dropdown" id="dropdown">
                    <div class="dropdown-trigger">
                        <button class="button is-hovered" aria-haspopup="true" aria-controls="dropdown-menu" style="margin-right: 50px;">
                            <span class="icon is-small">
                                <i class="zmdi zmdi-settings"></i>
                            </span>
                            <span>Opciones</span>
                            <span class="icon is-small">
                                <i class="zmdi zmdi-chevron-down"></i>
                            </span>
                        </button>
                    </div>
                    <div class="dropdown-menu" id="dropdown-menu" role="menu">
                        <div class="dropdown-content">
                            <a class="navbar-item" href="#">
                                <span class="icon is-small">
                                    <i class="zmdi zmdi-file-text"></i>
                                </span>
                                &nbsp; Manual
                            </a>

                            <a class="navbar-item" href="javascript:salir(confirm('¿Deséas salir del sistema?'),'cerrar-session.php');">
                                <span class="icon is-small">
                                    <i class="zmdi zmdi-power"></i>
                                </span>
                                &nbsp; Salir
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
<br>
<br>

<script type="text/javascript">

    function salir(confirmacion, url) {

        if (confirmacion) {

            window.location.href = url;
        }

    }

</script>


