<?php 

  include ('../../libs/adodb5/adodb-pager.inc.php');
  include ('../../libs/adodb5/adodb.inc.php');
  include ('../../models/Conexion.php');
  include ('../../models/Modelo.php');
  include ('../../models/Status.php');
  include ('../../controllers/StatusController.php');
  include ('../../libs/Er.php');

  //include ('../layouts/header.php');


  if(isset($_POST['status']))  {
    //Inicializar el controlador
    $StatusC = new StatusController();
    $StatusC->inserta_status($_POST);
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
                  <h1> <a href="../site/BD.php"><span class="glyphicon glyphicon-th"></span></a> Art&iacute;culo <small>Insertar</small></h1>
                </div>
              </div>
            </div>
            <form class="form-horizontal" role="form" id="registerForm" method="POST">
              <div class="row">
                <div class="col-md-12"> 
<!-- status -->
                  <div class="form-group">
                    <label for="status_estatus" class="col-sm-3 control-label">Estatus:</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" name="status" id="status_estatus" placeholder="Estatus del art&iacute;culo" />
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

