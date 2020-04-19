function validarTratamiento() {

    var frm_tratamiento = document.frm_tratamiento;
    var solo_letras = /^[a-z][a-z]*/;


    if (!solo_letras.test(frm_tratamiento.txtn_tratamiento.value)) {

        alert("Nombre no válido, debe iniciar por una letra.");
        frm_tratamiento.txtn_tratamiento.value = "";
        frm_tratamiento.txtn_tratamiento.focus();
        return false;

    }


    if (!solo_letras.test(frm_tratamiento.txtobs.value)) {

        alert("Observaciones no válidas.");
        frm_tratamiento.txtobs.focus();
        return false;

    } else if (frm_tratamiento.txtobs.value.length > 251) {

        alert("Observaciones no válidas, el texto debe ser menor o igual a 250 caracteres.");
        frm_tratamiento.txtobs.focus();
        return false;

    }


    if (frm_tratamiento.sestado.value == "") {
        alert("Elige un status");
        frm_tratamiento.sestado.focus();
        return false;
    }


}





