<?php 
  define('BASEURL','http://localhost:8080/PWeb/PrograWeb_verano/Examen3');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Revista</title>

<!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

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


    <!-- Custom styles for this template -->
    <link href="../css/cover.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../js/ie-emulation-modes-warning.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../js/ie10-viewport-bug-workaround.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link href="../css/Estilo.css" rel="stylesheet">


  </head>

  <body>

    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <div class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand">REVISTA</h3>
              <ul class="nav masthead-nav">
                <li class="active"><a href="<?php echo BASEURL; ?>">Inicio</a></li>
                <li><a href="<?php echo BASEURL; ?>/view/site/BD.php" class="various fancybox.iframe">Base de Datos</a></li>
                <li><a href="#">Contacto</a></li>
              </ul>
            </div>
          </div>

          