<?php
  header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
  header("Expires: Sat, 1 Jul 2000 05:00:00 GMT"); // Fecha en el pasado
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Puntos Heinz</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="Expires" content="0">
        <meta http-equiv="Last-Modified" content="0">
        <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
        <meta http-equiv="Pragma" content="no-cache">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <link href="assets/css/style2018.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <script src="https://use.fontawesome.com/1f2183b84e.js"></script>
    </head>
    <body class="bodyHome">
        <div class="container-fluid">
            <div class="row fixed-top mb-5">
                <div class="col ">
                    <nav class="navbar navbar-expand-lg navbar-dark NavColor">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="fa fa-th text-white mr-3" aria-hidden="true"></i>Monitor Puntos Heinz
                        </button>
                        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                            <a class="navbar-brand  font-weight-bold" href="#"><i class="fa fa-pie-chart fa-2x mr-3" aria-hidden="true"></i>Puntos Heinz Monitor</a>
                            <ul class="navbar-nav mr-auto mt-2 mt-lg-0 ml-lg-5">                        
                                <li class="nav-item">
                                    <a class="btn btn-light mr-lg-3" href="javascript:void(0)" onclick="loadSection('canje_controller/getCanjesGlobales','dvSecc')"><i class="fa fa-shopping-cart mr-1" aria-hidden="true"></i>Canjes realizados</a>
                                </li>
                                <li class="nav-item">
                                    <a class="btn btn-light mr-lg-3" href="javascript:void(0)" onclick="loadSection('canje_controller/getParticipantesActivos','dvSecc')"><i class="fa fa-users mr-1" aria-hidden="true"></i>Participantes</a>
                                </li>
                                <li class="nav-item">
                                    <a class="btn btn-light mr-lg-3" href="javascript:void(0)" onclick="loadSection('canje_controller/getListaPremios','dvSecc')"><i class="fa fa-gift mr-1" aria-hidden="true"></i>Lista de premios</a>
                                </li>
                                <li class="nav-item">
                                    <a class="btn btn-light mr-lg-3" href="javascript:void(0)" onclick="loadSection('canje_controller/PuntosObtenidosXmes','dvSecc')"><i class="fa fa-bar-chart mr-1" aria-hidden="true"></i>Puntos obtenidos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="btn btn-light mr-lg-3" href="javascript:void(0)" onclick="loadSection('canje_controller/PuntosRedimidos','dvSecc')"><i class="fa fa-star-half-o mr-1" aria-hidden="true"></i>Puntos Redimidos</a>
                                </li>
                            </ul>
                            <form class="form-inline my-2 my-lg-0">
                                <div class="dropdown">
                                    <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-user-circle-o mr-1" aria-hidden="true"></i><?php echo $this->session->userdata('nombre'); ?>
                                    </button>
                                    <div class="dropdown-menu  " aria-labelledby="dropdownMenuButton2">
                                        <a class="dropdown-item " id="exit" href="javascript:void(0)" onClick = "exit()"><i class="fa fa-sign-out mr-1" aria-hidden="true"></i>Salir</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="row justify-content-center mt-5">
                <div class="col-12 col-md-4 mt-4">
                    <img src="assets/images/Logo_Login.png" class="img-fluid" alt="Responsive image">
                </div>
            </div>
            <div class="row mb-5">
                <div class="col" id="dvSecc">
            </div>
        </div>
        <div class="row mt-5 headerColor fixed-bottom bg-dark justify-content-center mt-5">
            <div class="col-auto">
                <a href="javascript:void(0)" onclick="loadSection('aviso_controller','dvSecc')"" class="text-center text-white">Aviso de privacidad</a>
            </div>
        </div>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="assets/js/notify.js"></script>
        <script src="assets/js/functions.js"></script>
        <script src="assets/js/login.js"></script>
        <script></script>
    </body>
</html>