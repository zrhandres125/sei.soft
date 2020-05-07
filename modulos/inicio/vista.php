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
                            Rol:  <?php echo getPrivilegio($_SESSION["usuario"]["privilegio"]); ?> <br>
                            Teléfono: <?php echo $_SESSION["usuario"]["telefono"]; ?> <br>


                            <a href="#">Editar mi perfil</a> 

                        </div>
                    </div>
                </div>
            </div>


            <div class="column has-text-centered">
                <p class="bd-notification is-info">Menú | Opciones</p>
                
                <br>
                
                <div class="columns is-mobile">
                    <div class="column">
                        <p class="bd-notification is-info">First nested column</p>
                    </div>
                    <div class="column">
                        <p class="bd-notification is-info">Second nested column</p>
                    </div>
                    <div class="column">
                        <p class="bd-notification is-info">Second nested column</p>
                    </div>
                </div>
            </div>



        </div>















    </div>
</section>








