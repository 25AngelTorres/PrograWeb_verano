<?php 

  include ('../../libs/adodb5/adodb-pager.inc.php');
  include ('../../libs/adodb5/adodb.inc.php');
  include ('../../models/Conexion.php');
  include ('../../models/Modelo.php');
  include ('../../models/Autor.php');
  include ('../../controllers/AutorController.php');
  include ('../../libs/Er.php');

  //include ('../layouts/header.php');

//Inicializar el controlador
  $AutorC = new AutorController();
  if(isset($_POST['nombre']))  {
    $AutorC->inserta_Autor($_POST);
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
                  <h1> <a href="../site/BD.php"><span class="glyphicon glyphicon-th"></span></a> Autor <small>Insertar</small></h1>
                </div>
              </div>
            </div>
<!-- Errores -->
          <?php
            $AutorC->errores();
          ?>
            <div class="row">
              <div class="col-md-12">
                <form class="form-horizontal" role="form" id="registerForm" method="POST">
<!-- Nombre -->
                  <div class="form-group">
                    <label for="autor_nombre" class="col-sm-4 control-label"> Nombre del autor: </label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="autor_nombre" placeholder="Nombre del autor" name="nombre" value="<?php echo $AutorC->get_nombre(); ?>" >
                    </div>
                  </div>
<!-- Apellido -->
                  <div class="form-group">
                    <label for="autor_apellido" class="col-sm-4 control-label"> Apellido del autor: </label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="autor_apellido" placeholder="Apellido del autor" name="apellido" value="<?php echo $AutorC->get_apellido(); ?>" >
                    </div>
                  </div>
<!-- Email -->
                  <div class="form-group">
                    <label for="autor_email" class="col-sm-4 control-label"> Email del autor: </label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="autor_Email" placeholder="Email del autor" name="email" value="<?php echo $AutorC->get_email(); ?>" >
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-sm-6">
                      <input type="submit" value="Enviar"  />
                    </div>
                  </div>

                </form>
              </div>
            </div>
            
        </div><!-- Conteiner -->
      </div> <!-- class="site-wrapper-inner" -->
    </div> <!-- class="site-wrapper" -->

   

<?php include ('../layouts/footer.php'); ?>
