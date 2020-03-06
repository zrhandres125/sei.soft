<?php

/**
 * Funcion que limpia y valida un campo
 * @param  input $campo Debe ser una entrada tipo POST
 * @return String
 */
function validar_campo($campo){
    
    $campo = trim($campo);
    $campo = stripcslashes($campo);
    $campo = htmlspecialchars($campo);
    
    return $campo;
}


?>