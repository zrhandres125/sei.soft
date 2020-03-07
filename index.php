<?php

if (isset($_GET["pagina"])) {

    if ($_GET["pagina"] == "registro") {

        include ("registro_usuario.php");
    }

    if ($_GET["pagina"] == "login") {

        include ("login.php");
    }
    
} else {
    include ("login.php");
}


