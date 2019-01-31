var server = "http://www.puntosheinz.com.mx/";

function valLogin() {
    var user = $('#usuario');
    var pass = $('#password');

    if (!(fieldOK(user) && fieldOK(pass))) {
        $.notify("Campos obligatorios", "error");
        return;
    }
    $.ajax({
        url: 'login_controller/login',
        type: 'POST',
        dataType: 'json',
        async: 'true',
        data: { "usuario": $("#usuario").val(), "password": $("#password").val() },
        success: function(result) {

            if (result) {
                //console.log("Session start");
                window.location.reload();
            } else {
                //console.log("Error login");
                $.notify("Los datos ingresados son incorrectos", "error");
            }

        },
        error: function(xhr, ajaxOptions, thrownError) {
            $.notify("Ha ocurrido un error de conexión", "error");
        }
    });
}


function fieldOK(field) {
    field.removeClass("error");
    if (field.val() == '') {
        field.addClass("error");
        return false;
    }
    return true;
}