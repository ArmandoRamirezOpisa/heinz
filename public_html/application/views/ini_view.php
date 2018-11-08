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
 	
    
    <div class="container contLogin">
     <!-- <center><h2>&#161;Gracias por tu participaci&oacute;n&#33;</h2></center>
	  <div style="text-align:left;float:left;width:50%;">
	  	<img style="width:100%;height:auto;" src="assets/images/logo.png">
	  </div>
      <div style="float:left;width:50%;height:100%">
      <label style="margin-top:20%;font-size:20px;"></label><b>Puntos Heinz termin&oacute; el 15 de Enero del 2015, muchas gracias por tu participaci&oacute;n y apoyo a nuestro programa.</b></label>

      </div>-->
      <form class="form-signin" role="form">
      
        <div class="form-group">
            <label for="usuario">Usuario (Ingrese sin el guion)</label>
            <input class="form-control" placeholder="Usuario (Ingrese sin el guion (-))" required="" autofocus="" type="email" name="usuario" id="usuario">
        </div>
      
        <div class="form-group">
            <label for="password">Contrase&ntilde;a</label>
            <input class="form-control" placeholder="Contrase&ntilde;a" required="" type="password" name="password" id="password"><br />
        </div>
       
        <a href="javascript:void(0)" onClick="valLogin()" class="btn btn-lg btn-block" style="background:#fd2608;color:#FFF;">Entrar</a>
      </form>

    </div> <!-- /container -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/notify.js"></script>
    <script src="assets/js/functions.js"></script>
    <script src="assets/js/login.js"></script>
    
  </body>
</html>