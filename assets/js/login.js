const server = "http://puntosheinz.com.mx";

const password = document.getElementById('password');

password.addEventListener("keyup", loginBtn);


function loginBtn(event) {
    if (event.keyCode == 13) {
        valLogin();
    }
}

function valLogin() {
    var user = $('#usuario').val();
    var pass = $('#password').val();
    if (user == "" || pass == "") {
        $.notify("Campos obligatorios", "error");
    } else {
        $.ajax({
            url: server + '/Login_controller/login',
            type: 'POST',
            dataType: 'json',
            async: 'true',
            data: {
                "user": user,
                "pass": pass
            },
            success: function(result) {
                if (result) {
                    window.location.reload();
                } else {
                    $.notify("Los datos ingresados son incorrectos", "error");
                }
            },
            error: function(error, xhr, ajaxOptions, thrownError) {
                $.notify("Ha ocurrido un error de conexión", "error");
            }
        });
    }
}

function fieldOK(field) {
    field.removeClass("error");
    if (field.val() == '') {
        field.addClass("error");
        return false;
    }
    return true;
}