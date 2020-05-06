$(document).ready(function () {
    $('#txtcodigoUcc').on('blur', function () {

        var txtcodigoUcc = $(this).val();
        var dataString = 'txtcodigoUcc=' + txtcodigoUcc;

        $.ajax({
            type: "POST",
            url: "?modulo=usuarios/validar_disponibilidad_usuario",
            data: dataString,
            success: function (data) {
                //$('#resultado').fadeIn(1000).html(data);
                //$('#crear_usu').attr('disabled', 'disabled');
                //alert('Esta registrado').fadeIn(1000).html(data);
                
                $("body").overhang({
                    type: "error",
                    message: "Este usuario ya esta registrado!!!",
                    closeConfirm: true
                });
            }
        });
    });
});


