// Valida la conexion del login por medio de ajax
$(document).ready(function () {
    // Funcion jquery que ejecuta la funcion de acuerdo al evento que se indica (submit)
    $("#loginForm").bind("submit", function () {
        // alert("Enviar formulario");
        $.ajax({
            type: $(this).attr("method"),
            url: $(this).attr("action"),
            data: $(this).serialize(),
            beforeSend: function(){
                $("#loginForm button[type = submit]").html("Enviando...");
                $("#loginForm button[type = submit]").attr("disabled", "disabled");
            },
            success: function (response) {
                console.log(response);
                if (response.estado == "true") {
                    //alert("Conectado");
                    $("body").overhang({
                        type: "success",
                        message: "Usuario encontrado, te estamos redirigiendo...",
                        callback: function() {
                            window.location.href = "administrador"
                        }
                    });
                } else {
                    //alert("Error al conectar");
                    $("body").overhang({
                        type: "error",
                        message: "Usuario o password incorrecto!"
                    });
                }
                $("#loginForm button[type = submit]").html("Ingresar");
                $("#loginForm button[type = submit]").removeAttr("disabled");
            },
            error: function () {
                //alert("Error al conectar");
                $("body").overhang({
                    type: "error",
                    message: "Usuario o password incorrecto!"
                });
                $("#loginForm button[type = submit]").html("Ingresar");
            }
        });
        return false;
    });

});
