<?php
  header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
  header("Expires: Sat, 1 Jul 2000 05:00:00 GMT"); // Fecha en el pasado
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=gb18030">
        <meta http-equiv="Expires" content="0">
        <meta http-equiv="Last-Modified" content="0">
        <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
        <meta http-equiv="Pragma" content="no-cache">
        <title>Puntos Heinz</title>
        <!-- Required meta tags -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <link href="assets/css/style2018.css?a" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	    <script src="https://use.fontawesome.com/1f2183b84e.js"></script>
    </head>
    <body class="bodyLogin animated apareciendo" onLoad="if ('Navigator' == navigator.appName)document.forms[0].reset();">
        <div class="container animated apareciendo">
            <div class="row justify-content-center animated apareciendo">
                <div class="col-12 col-md-6">
                    <img src="assets/images/Logo_Login.png" class="img-fluid" alt="Responsive image">
                </div>
            </div>
            <div class="row justify-content-center animated apareciendo">
                <div class="col-12 col-md-4 animated apareciendo">
                    <form>

                        <div class="form-group">
                            <label for="usuario" class="textLabelLogin font-weight-bold">
                                <strong>Usuario</strong>
                            </label>
                            <input type="text" class="form-control form-control-sm" placeholder="Usuario (Ingrese sin el guion (-))" required="" autofocus="" type="email" name="usuario" id="usuario">
                        </div>
                        <div class="form-group">
                            <label for="password" class="textLabelLogin font-weight-bold"><strong>Contrase&ntilde;a</strong></label>
                            <input type="password" class="form-control form-control-sm" placeholder="Contrase&ntilde;a" required="" type="password" name="password" id="password">
                        </div>
                        <button class="btn btn-primary text-center btn-block cursor" onClick="valLogin()" type="button"><i class="fa fa-sign-in mr-2" aria-hidden="true"></i>Entrar</button>
                    </form>
                    <small class="form-text text-muted text-center">  
                        Para una correcta visualizaci?n del sitio se recomienda el uso de
                        Chrome, Firefox, Safari, Opera
                    </small>
                </div>
            </div>
        </div>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="assets/js/notify.js?a"></script>
        <script src="assets/js/functions.js?a"></script>
        <script src="assets/js/login.js?a"></script>
    </body>
</html>