<?php include "partials/header.php"; ?>

<?php
//Validar usuarios y redireccionar segun su rol
if (isset($_SESSION["usuario"])) {
    if ($_SESSION["usuario"]["privilegio"] == 1) {
        header("location: administrador");
    }
} else {
    header("location: login");
}
?>


?>

<?php $modulo = isset($_GET['modulo']) ? strtolower($_GET['modulo']) : 'inicio/vista' ?>

<?php include "partials/menu.php"; ?>

<?php require_once ("modulos/" . $modulo . ".php"); ?>

<?php include "partials/footer.php"; ?>




