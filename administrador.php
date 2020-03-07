<?php include "partials/header.php"; ?>

<?php
//Validar usuarios y redireccionar segun su rol
if (isset($_SESSION["usuario"])) {
    if ($_SESSION["usuario"]["privilegio"] == 2) {
        header("location: asistente.php");
    }
} else {
    header("location: login.php");
}
?>


<?php include "partials/menu.php"; ?>

<!--<section class="section">
    <div class="container">
        <div class="columns">
            <div class="column is-12">
                <h2>Bienvenido <?php echo $_SESSION["usuario"]["nombres"]; ?></h2>
                <p>Panel de control | <?php echo $_SESSION["usuario"]["privilegio"] == 1 ? 'Administrador' : 'Asistente'; ?></p>
            </div>
        </div>
    </div>
</section>-->


<?php $modulo = isset($_GET['modulo']) ? strtolower($_GET['modulo']) : 'inicio/vista' ?>
<?php require_once ("modulos/" . $modulo . ".php"); ?>













<?php include "partials/footer.php"; ?>


