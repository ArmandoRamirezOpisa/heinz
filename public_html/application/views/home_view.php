<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Puntos Heinz</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <link href="assets/css/style2018.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/docsearch.min.css">
        <link rel="stylesheet" href="assets/css/docs.min.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <script src="https://use.fontawesome.com/1f2183b84e.js"></script>
        <link rel="shortcut icon" href="assets/images/kraft.png" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.19.1/sweetalert2.min.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.19.1/sweetalert2.min.js"></script>
    </head>
    <body class="bodyHome">
        <!-- menu principal -->
        <header>
            <nav class="navbar navbar-expand-lg fixed-top navbar-light color-navbar">
                <a class="navbar-brand" href="http://puntosheinz.com.mx/">
					<img src="assets/images/kraft.png" width="120" height="30" alt="">
				</a>
			    <button class="navbar-toggler" type="button" data-toggle="collapse" data-toggle="tooltip" title="Ver menu" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
			    <div class="collapse navbar-collapse" id="navbarSupportedContent">
				    <ul class="navbar-nav mr-auto">
					    <li class="nav-item">
						    <a class="nav-link" href="#"><span class="colorMenu">Saldo</span><span class="badge badge-warning"><?php echo number_format($this->session->userdata('puntos')); ?></span></a>
					    </li>
					    <li class="nav-item btn-option">
					        <a class="nav-link" href="javascript:void(0)" onclick="loadSection('cart_controller/showContentCart','dvSecc')"><span class="colorMenu"><i class="fa fa-shopping-basket mr-2" aria-hidden="true"></i>Carrito</span></a>
					    </li>
					    <li class="nav-item btn-option">
						    <a class="nav-link btn-option" href="javascript:void(0)" onclick="loadSection('reglas_controller','dvSecc')"><span class="colorMenu"><i class="fa fa-list-alt mr-2" aria-hidden="true"></i>Reglas</span></a>
					    </li>
					    <li class="nav-item btn-option">
					        <a class="nav-link" href="javascript:void(0)" onclick="loadSection('producto_controller','dvSecc')"><span class="colorMenu"><i class="fa fa-bullseye mr-2" aria-hidden="true"></i>Productos</span></a>
					    </li>
					    <li class="nav-item btn-option">
						    <a class="nav-link" href="javascript:void(0)" onclick="loadSection('cart_controller/getCategory','dvSecc')"><span class="colorMenu"><i class="fa fa-gift mr-2" aria-hidden="true"></i>Premios</span></a>
					    </li>
					    <li class="nav-item btn-option">
					        <a class="nav-link" href="javascript:void(0)" onclick="loadSection('canje_controller/getCanjes','dvSecc')"><span class="colorMenu"><i class="fa fa-shopping-cart mr-2" aria-hidden="true"></i>Movimientos</span></a>
					    </li>
					    <li class="nav-item btn-option">
						    <a class="nav-link" href="javascript:void(0)" onclick="loadSection('cuenta_controller','dvSecc')"><span class="colorMenu"><i class="fa fa-eye mr-2" aria-hidden="true"></i>Estado de cuenta</span></a>
					    </li>
					    <li class="nav-item">
						    <div class="fb-like mt-1" data-href="https://www.facebook.com/Puntos-Heinz-380709378734414/?ref=br_rs" data-layout="button_count" data-action="like" data-size="large" data-show-faces="true" data-share="true"></div>
					    </li>
				    </ul>
				    <form class="form-inline my-2 my-lg-0">
					    <div class="dropdown">
                            <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-user-circle-o"></i> Usuario</button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#salirPuntosHeinz">Cerrar sesion</a>
                            </div>
                        </div>
				    </form>
			    </div>
		    </nav>
        </header>
        <!-- Fin menu principal -->
        <div class="container-fluid" style="padding-top:60px;">
            <!-- Div que va a ir cambiando para mostrar diferentes elementos -->
            
            <div id="dvSecc" class="row flex-xl-nowrap"></div>

            <div class="row mt-5 headerColor fixed-bottom bg-dark justify-content-center mt-5">
                <div class="col-auto">
                    <a href="javascript:void(0)" onclick="loadSection('aviso_controller','dvSecc')" class="text-center text-white">Aviso de privacidad</a>
                </div>
            </div>
        </div>

        <!-- Modal Cerrar Salir --> 
        <div class="modal fade" id="salirPuntosHeinz" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Cerrar sesion</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Seguro que quieres salir?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary cursor" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary cursor" onClick = "exit()">Salir</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fin modal cerrar salir -->
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
