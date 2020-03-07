<section class="section">
    <div class="container">
        <div class="columns">
            <div class="column is-12">
                <h2>Bienvenido <?php echo $_SESSION["usuario"]["nombres"];?> <?php echo $_SESSION["usuario"]["apellidos"];?></h2>
                <p>Panel de control | <?php echo $_SESSION["usuario"]["privilegio"] == 1 ? 'Administrador' : 'Asistente'; ?></p>
            </div>
        </div>
    </div>
</section>


<section class="section">
    <div class="container">
        <div class="columns">
            <div class="column is-12">
                <p>
                    Esta es la pantalla de presentacion
                </p>
            </div>
        </div>
    </div>
</section>
