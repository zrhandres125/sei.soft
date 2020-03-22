function validarUsuario() {

    var frm_usuario = document.frm_usuarios;
    var solo_numeros = /^\d*$/;
    var solo_letras = /^[a-z][a-z]*/;
    var solo_email = /\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)/;

    if (!solo_numeros.test(frm_usuario.txtcodigoUcc.value) || frm_usuario.txtcodigoUcc.value == 0) {

        alert("Código UCC no válido");
        frm_usuario.txtcodigoUcc.value = "";
        frm_usuario.txtcodigoUcc.focus();
        return false;

    } else if (!solo_letras.test(frm_usuario.txtnombres.value)) {

        alert("Nombres no válidos");
        frm_usuario.txtnombres.value = "";
        frm_usuario.txtnombres.focus();
        return false;

    } else if (!solo_letras.test(frm_usuario.txtapellidos.value)) {

        alert("Apellidos no válidos");
        frm_usuario.txtapellidos.value = "";
        frm_usuario.txtapellidos.focus();
        return false;

    } else if (frm_usuario.sgenero.value == "") {

        alert("Elige un género");
        frm_usuario.sgenero.focus();
        return false;

    } else if (!solo_numeros.test(frm_usuario.txttelefono.value) || frm_usuario.txttelefono.value == 0) {

        alert("Teléfono no válido");
        frm_usuario.txttelefono.value = "";
        frm_usuario.txttelefono.focus();
        return false;

    } else if (!solo_email.test(frm_usuario.txtemail.value)) {

        alert("E-mail no válido");
        frm_usuario.txtemail.value = "";
        frm_usuario.txtemail.focus();
        return false;

    } else if (frm_usuario.srol.value == "") {

        alert("Elige un rol");
        frm_usuario.srol.focus();
        return false;

    } else if (frm_usuario.sestado.value == "") {
        alert("Elige un status");
        frm_usuario.sestado.focus();
        return false;
    }


    if (frm_usuario.txtpassword.value !== frm_usuario.txtverificar.value) {

        alert("Las contraseñas no son iguales");
        frm_usuario.txtpassword.value = "";
        frm_usuario.txtverificar.value = "";
        frm_usuario.txtpassword.focus();
        return false;

    } else if (frm_usuario.txtpassword.value.length < 7 || frm_usuario.txtpassword.value.length > 10) {
        alert("La longitud de la contraseña no es válida");
        frm_usuario.txtpassword.value = "";
        frm_usuario.txtverificar.value = "";
        frm_usuario.txtpassword.focus();
        return false;
    }


}





