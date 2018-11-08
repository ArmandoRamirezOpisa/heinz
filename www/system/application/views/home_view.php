<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Puntos Heinz</title>

    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    
    
   <div id="cont">
        <div id="header">
            <div id="dvFace">
                <a href="https://www.facebook.com/pages/Puntos-Heinz/380709378734414" target="_blank"><img id="imgFace" src="assets/images/face.png"/></a>
            </div>
            <div id="dvDatUser">
                <span class="glyphicon glyphicon-user"></span> <?php echo $this->session->userdata('nombre'); ?><br />
                <span class="glyphicon glyphicon-screenshot"></span> <?php echo number_format($this->session->userdata('puntos')); ?> puntos<br />
                <a href="javascript:void(0)" onclick="loadSection('cuenta_controller','dvSecc')" id="dvEc"><span class="glyphicon glyphicon-folder-open"></span> Estado de cuenta<br /></a>
            </div>
            <a id="exit" href="javascript:void(0)" onClick = "exit()" style="color:#FFF;font-weight:bold" class="btn">Salir</a>
            <div id="headBut">
	            	<div class="btn-group">
	            	<a href="javascript:void(0)" onclick="loadSection('reglas_controller','dvSecc')" class="btn btn-orange btn-group-sm"><span class="glyphicon glyphicon-list-alt"></span> Reglas</a>
	            	<a href="javascript:void(0)" onclick="loadSection('producto_controller','dvSecc')" class="btn btn-orange btn-group-sm"><span class="glyphicon glyphicon-record"></span> Productos</a>
	            	<a href="javascript:void(0)" onclick="loadSection('cart_controller/getCategory','dvSecc')" class="btn btn-orange btn-group-sm"><span class="glyphicon glyphicon-gift"></span> Premios</a>
	            	<a href="javascript:void(0)" onclick="loadSection('canje_controller/getCanjes','dvSecc')" class="btn btn-orange btn-group-sm"><span class="glyphicon glyphicon-shopping-cart"></span> Mis Canjes</a>
            	</div>
            </div>
            <div class="btn-group" id="mnuMobile"><!--Menu mobile-->
              <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
                Menu <span class="caret"></span>
              </button>
              <ul class="dropdown-menu" role="menu">
                <li><a href="javascript:void(0)" onclick="loadSection('reglas_controller','dvSecc')"><span class="glyphicon glyphicon-list-alt"></span> Reglas</a></li>
                <li><a href="javascript:void(0)" onclick="loadSection('producto_controller','dvSecc')"><span class="glyphicon glyphicon-record"></span> Productos</a></li>
                <li><a href="javascript:void(0)" onclick="loadSection('cart_controller/getCategory','dvSecc')"><span class="glyphicon glyphicon-gift"></span> Premios</a></li>
                <li><a href="javascript:void(0)" onclick="loadSection('canje_controller/getCanjes','dvSecc')"><span class="glyphicon glyphicon-shopping-cart"></span> Mis Canjes</a></li>
                <li><a href="javascript:void(0)" onclick="loadSection('cuenta_controller','dvSecc')"><span class="glyphicon glyphicon-folder-open"></span> Estado de Cuenta</a></li>
                <li class="divider"></li>
                <li><a href="javascript:void(0)"> Salir</a></li>
              </ul>
            </div>
        </div>
        <div id="logo">
            <img class="imgLogo" src="assets/images/logo.png">
        </div>
        <div id="bann">
            <div id="dvProd"></div>
            <div id="dvPrem"></div>
            
        <p class="text-center" id="btnPCart"><button type="button" class="btn btn-info" onClick="loadSection('cart_controller/showContentCart/','dvContAw')">Ver contenido del carrito <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></button></p> 
        
        </div>
        
        <div id="dvSecc">
        </div>
   
       <div id="footer">
        <a style="color:#f07b1c;" href="javascript:void(0)" onclick="loadSection('aviso_controller','dvSecc')"">Aviso de privacidad</a>
       </div>
   </div>
    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/notify.js"></script>
    <script src="assets/js/functions.js"></script>
    
    <script>
        loadSection("botonera_controller","dvSecc");
    </script>
  </body>
</html>