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

/**
 * Funcion que de acuerdo al parametro enviado devuelve el rol del usuario en el sistema
 * @param integer $p
 * @return string
 */
function getPrivilegio($p){
    
    $privilegio = "";
    
    switch ($p) {
        case 1:
            $privilegio = "Admon.";
            break;
        
        case 2:
            $privilegio = "Asist.";
            break;

        default:
            $privilegio = "- No definido -";
            break;
    }
    
    return $privilegio;
}


/**
 * Funcion que de acuerdo al parametro enviado devuelve el status del registro
 * @param integer $s
 * @return string
 */
function getStatus($s){
    
    $status = "";
    
    switch ($s) {
        case 1:
            $status = "A";
            break;
        
        case 2:
            $status = "I";
            break;

        default:
            $status = "- No definido -";
            break;
    }
    
    return $status;
}


?>