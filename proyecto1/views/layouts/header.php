<?php 
  define('BASEURL','http://localhost:8080/PWeb/PrograWeb_verano/proyecto1');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Clase programación web verano</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="../css/justified-nav.css" rel="stylesheet">
        



<!-- Datepicket -->
       <link rel="stylesheet" type="text/css" media="screen" href="../css/bootstrap-datetimepicker.css" />

<!-- Bootstrap Validator -->
        <link rel="stylesheet" href="../css/bootstrap.css"/>
        <link rel="stylesheet" href="../css/bootstrapValidator.min.css"/> 

 <!-- Fancybox -->
        <!-- Add fancyBox -->
        <link rel="stylesheet" href="../css/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
        <!-- Optionally add helpers - button, thumbnail and/or media -->
        <link rel="stylesheet" href="../css/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
        <link rel="stylesheet" href="../css/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
        


  </head>

  <body role="document" style="background-color:#033;">


    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Programación Web</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="<?php echo BASEURL; ?>/views/site/inicio.php">Inicio</a></li>
            
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Base de Datos  <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="">Ingresar Continente</a></li>
                <li class="divider"></li>
                <li><a href="">Ingresar Pais</a></li>
                <li class="divider"></li>
                <li><a href="">Ingresar Posisi&oacute;n</a></li>
                <li class="divider"></li>
                <li><a href="">Ingresar Ciudad</a></li>
                <li class="divider"></li>
                <li><a href="">Ingresar Estadio</a></li>
              </ul>
            </li>

          </ul>

          <ul class="nav navbar-nav navbar-right">
            <li><a href="<?php echo BASEURL; ?>/views/site/login.php">
              <span class="glyphicon glyphicon-log-in"></span> Login</a>
            </li>
          </ul>
          

        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="container theme-showcase" role="main" style="background-color:RGBA(255,255,255,0.5); padding-top:20px;">

