<?php include 'helps/helps.php'; ?>

<section class="section">
    <div class="container">
        <div class="columns">
            <div class="column is-3">
                <div class="card">
                    <div class="card-image">
                        <figure class="image is-4by3">
                            <img src="assets/img/cuenta.png" alt="Placeholder image">
                        </figure>
                    </div>
                    <div class="card-content">
                        <div class="media">
                            <div class="media-left">
                                <figure class="image is-48x48">
                                    <img src="assets/img/perfil_usu.png" alt="Placeholder image">
                                </figure>
                            </div>
                            <div class="media-content">
                                <p class="title is-4">
                                    <?php echo $_SESSION["usuario"]["nombres"]; ?> 
                                    <?php echo $_SESSION["usuario"]["apellidos"]; ?>
                                </p>
                                <p class="subtitle is-6">Datos de usuario:</p>
                            </div>
                        </div>

                        <div class="content">
                            Usuario:  <?php echo $_SESSION["usuario"]["usuario"]; ?> <br>
                            Género: <?php echo $_SESSION["usuario"]["genero"]; ?> <br>
                            Privilegio:  <?php echo getPrivilegio($_SESSION["usuario"]["privilegio"]); ?> <br>
                            
                        </div>
                    </div>
                </div>
            </div>

            <div class="column has-text-centered" style="margin-top: 40px;">
                <p class="title is-4">Menú | Opciones</p>
                <div class="columns" style="margin-top: 40px;">
                    <div class="column">
                        <p style="margin-bottom: 50px;">
                            <i class="zmdi zmdi-account zmdi-hc-4x"></i><br> 
                            <a class="has-text-grey-darker" href="?modulo=usuarios/listar_usuarios">
                                Modulo Usuarios
                            </a>
                        </p>

                        <p>
                            <i class="zmdi zmdi-assignment zmdi-hc-4x"></i><br> 
                            <a class="has-text-grey-darker" href="?modulo=usuarios/listar_usuarios">
                                Indicadores Bienestar
                            </a>
                        </p>
                    </div>

                    <div class="column">
                        <p style="margin-bottom: 50px;">
                            <i class="zmdi zmdi-format-list-bulleted zmdi-hc-4x"></i><br> 
                            <a class="has-text-grey-darker" href="?modulo=tratamientos/listar_tratamientos">
                                Modulo Tratamientos
                            </a>
                        </p>

                        <p>
                            <i class="zmdi zmdi-book zmdi-hc-4x"></i><br> 
                            <a class="has-text-grey-darker" href="?modulo=tratamientos/listar_tratamientos">
                                Indicadores Calidad del Huevo
                            </a>
                        </p>
                    </div>

                    <div class="column">
                        <p style="margin-bottom: 50px;">
                            <i class="zmdi zmdi-folder zmdi-hc-4x"></i><br> 
                            <a class="has-text-grey-darker" href="?modulo=tratamientos/listar_tratamientos">
                                Modulo Gestión UE
                            </a>
                        </p>

                        <p>
                            <i class="zmdi zmdi-archive zmdi-hc-4x"></i><br> 
                            <a class="has-text-grey-darker" href="?modulo=tratamientos/listar_tratamientos">
                                Indicadores Productividad
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>








