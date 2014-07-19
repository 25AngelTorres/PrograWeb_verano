<?php 

  include ('../../libs/adodb5/adodb-pager.inc.php');
  include ('../../libs/adodb5/adodb.inc.php');
  include ('../../models/Conexion.php');
  include ('../../models/Modelo.php');
  include ('../../models/Revista.php');
  include ('../../controllers/RevistaController.php');
  include ('../../libs/Er.php');

  //include ('../layouts/header.php');

//Inicializar el controlador
    $RevistaC = new RevistaController();

  if(isset($_POST['nombre']))  {
    /*echo "<pre>";
      print_r($_POST);
      print_r($_FILES);
    echo "</pre>";
    //die(); */
    $RevistaC->inserta_revista($_POST, $_FILES);
  }

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



  </head>

  <body>

    <div >

      <div>

        <div >

<!-- header 

  <body>
    <div class="site-wrapper">
      <div class="site-wrapper-inner">
        <div class="cover-container">
-->


        </div> <!-- class="cover-container" -->

          <div class="container" id ="container">
            <div class="row">
              <div class="col-md-12">
                <div class="page-header">
                  <h1> <a href="../site/BD.php"><span class="glyphicon glyphicon-th"></span></a> Revista <small>Insertar</small></h1>
                </div>
              </div>
            </div>

<!-- Errores -->
          <?php
            $RevistaC->errores();
          ?>
<!-- Crer una clase -->

            <form class="form-horizontal" role="form" id="registerForm" method="POST" enctype="multipart/form-data">
              <div class="row">
                <div class="col-md-6">
                
<!-- Titulo -->
                  <div class="form-group">
                    <label for="revista_titulo" class="col-sm-3 control-label">Titulo:</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" name="titulo" id="revista_titulo" placeholder="Titulo de la revista" value="<?php echo $RevistaC->get_titulo(); ?>" />
                    </div>
                  </div>
<!-- Subtitulo -->
                  <div class="form-group">
                    <label for="revista_subtitulo" class="col-sm-3 control-label">Subtitulo:</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" name="subtitulo" id="revista_subtitulo" placeholder="Subtitulo de la revista" value="<?php echo $RevistaC->get_subtitulo(); ?>"/>
                    </div>
                  </div>
<!-- Portada -->
                  <div class="form-group">
                    <label for="revista_portada" class="col-sm-3 control-label">Portada:</label>
                    <div class="col-sm-6">
                      <input type="file" class="form-control" name="portada" id="revista_portada" value="<?php echo $RevistaC->get_portada(); ?>" />
                    </div>
                  </div>
<!-- Fecha -->
                  <div class="form-group">
                    <label for="datetimepicker6" class="col-sm-3 control-label">Fecha: </label>
                  <!-- Ejemplo 6 de Boostrap datetimepicker -->
                    <div class='col-sm-6'>
                      <input type='text' class="form-control" id='datetimepicker6' name="fecha" value="<?php echo $RevistaC->get_fecha(); ?>"/>
                    </div>
                  </div>
<!-- Numero -->
                  <div class="form-group">
                    <label for="revista_numero" class="col-sm-3 control-label">N&uacute;mero: </label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" name="numero" id="revista_numero" placeholder="Numero" value="<?php echo $RevistaC->get_numero(); ?>" />
                    </div>
                  </div>
<!-- Volumen -->
                  <div class="form-group">
                    <label for="revista_volumen" class="col-sm-3 control-label">Volumen: </label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" name="volumen" id="revista_volumen" placeholder="Volumen de la revista" value="<?php echo $RevistaC->get_volumen(); ?>" />
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
<!-- Clave -->
                  <div class="form-group">
                    <label for="revista_clave" class="col-sm-3 control-label">Clave: </label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" name="clave" id="revista_clave" placeholder="Clave de la revista" value="<?php echo $RevistaC->get_clave(); ?>" />
                    </div>
                  </div>
<!-- Nombre -->
                  <div class="form-group">
                    <label for="revista_nombre" class="col-sm-3 control-label">Nombre: </label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" name="nombre" id="revista_nombre" placeholder="Nombre de la revista" value="<?php echo $RevistaC->get_nombre(); ?>" />
                    </div>
                  </div>
<!-- Editorial -->    
                  <div class="form-group">
                    <label for="revista_editorial" class="col-sm-3 control-label">Editorial: </label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" name="editorial" id="revista_editorial" placeholder="Editorial de la revista" value="<?php echo $RevistaC->get_editorial(); ?>" />
                    </div>
                  </div>
<!-- Directorio -->
                  <div class="form-group">
                    <label for="revista_directorio" class="col-sm-3 control-label">Directorio: </label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" name="directorio" id="revista_directorio" placeholder="Directorio de la Revista" value="<?php echo $RevistaC->get_directorio(); ?>" />
                    </div>
                  </div>
<!-- Status -->
                  <div class="form-group">
                    <label for="revista_status" class="col-sm-3 control-label">Estatus: </label>
                    <div class="col-sm-6">
                      <select name="id_status" id="revista_status" class="form-control">
                        <option>Elige un estatus</option>
                        <option value="1">Estatus 1</option>
                        <option value="2">Estatus 2</option>
                        <option value="3">Estatus 3</option>
                      </select>
                    </div>
                  </div>

                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <div class="col-sm-12">
                      <input type="submit" value="Enviar"  />
                    </div>
                  </div>

                
                </div>
              </div>
            </form>
            
        </div><!-- Conteiner -->
      </div> <!-- class="site-wrapper-inner" -->
    </div> <!-- class="site-wrapper" -->

   

<?php include ('../layouts/footer.php'); ?>

