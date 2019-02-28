<?php
  header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
  header("Expires: Sat, 1 Jul 2000 05:00:00 GMT"); // Fecha en el pasado
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Puntos Heinz</title>

    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css?a" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body onLoad="if ('Navigator' == navigator.appName)document.forms[0].reset();">
    
    
        <div id="header">
        </div>
        <div id="logo">
            <img class="imgLogo" src="assets/images/logo.png">
        </div>
        <div id="bann">
        </div>
        <p class="text-center" id="btnPCart"><button type="button" class="btn btn-info" onClick="loadSection('cart_controller/showContentCart/','dvContAw')">Ver contenido del carrito <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></button></p> 
        
<script>
    if (contOrder.length > 0)
    {
        $("#btnPCart").show();
    }else{
        $("#btnPCart").hide();
    }
</script>  