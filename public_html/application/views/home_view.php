<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Puntos Heinz</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <link href="assets/css/style2018.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <script src="https://use.fontawesome.com/1f2183b84e.js"></script>
        <link rel="shortcut icon" href="assets/images/kraft.png" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.19.1/sweetalert2.min.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.19.1/sweetalert2.min.js"></script>
    </head>
    <body class="bodyHome">
        <div class="container-fluid">
            <div class="row fixed-top mb-5">
                <div class="col ">
                    <nav class="navbar navbar-expand-lg navbar-dark NavColor">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="fa fa-th text-white" aria-hidden="true"></i> <span class="ml-2 font-weight-bold">Puntos heinz</span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                            <a class="navbar-brand  font-weight-bold" href="#"><img src="assets/images/kraft.png" width="140" > Saldo <span class="badge badge-warning"><?php echo number_format($this->session->userdata('puntos')); ?></span></a>
                            <ul class="navbar-nav mr-auto mt-2 mt-lg-0 ml-lg-0">
                                <li class="nav-item">
                                    <a class="btn btn-light" href="javascript:void(0)" onclick="loadSection('cart_controller/showContentCart','dvSecc')"><i class="fa fa-shopping-basket mr-2" aria-hidden="true"></i>Carrito</a>
                                </li>
                                <li class="nav-item">
                                    <a class="btn btn-light " href="javascript:void(0)" onclick="loadSection('reglas_controller','dvSecc')"><i class="fa fa-list-alt mr-2" aria-hidden="true"></i>Reglas</a>
                                </li>
                                <li class="nav-item">
                                    <a class="btn btn-light " href="javascript:void(0)" onclick="loadSection('producto_controller','dvSecc')"><i class="fa fa-bullseye mr-2" aria-hidden="true"></i>Productos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="btn btn-light " href="javascript:void(0)" onclick="loadSection('cart_controller/getCategory','dvSecc')"><i class="fa fa-gift mr-2" aria-hidden="true"></i>Premios</a>
                                </li>
                                <li class="nav-item">
                                    <a class="btn btn-light" href="javascript:void(0)" onclick="loadSection('canje_controller/getCanjes','dvSecc')"><i class="fa fa-shopping-cart mr-2" aria-hidden="true"></i>Movimientos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="btn btn-light mr-lg-2" href="javascript:void(0)" onclick="loadSection('cuenta_controller','dvSecc')"><i class="fa fa-eye mr-2" aria-hidden="true"></i>Estado de cuenta</a>
                                </li>
                                <li class="nav-item ml-lg-1">
                                    <div class="fb-like mt-1" data-href="https://www.facebook.com/Puntos-Heinz-380709378734414/?ref=br_rs" data-layout="button_count" data-action="like" data-size="large" data-show-faces="true" data-share="true"></div>
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
                <div class="col" id="dvSecc"></div>
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
        <script >
            loadSection('cart_controller/getCategory','dvSecc');
        </script>
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.11&appId=111658766187049';
            fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>
        <script>
            swal({
                title: '¡Bienvenido a nuestro programa de incentivos!',
                text: '',
                imageUrl: 'http://www.puntosheinz.com.mx/assets/images/notificacion_001.jpg',
                imageWidth: 600,
                imageHeight: 800,
                imageAlt: 'Custom image',
                animation: false
            })
        </script>
    </body>
</html>
