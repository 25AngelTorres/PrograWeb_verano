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
                  <h1>Manejo de la base de datos <small>Revista</small></h1>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="list-group">
                  <div href="#" class="list-group-item active">
                    Manejo de Base de Datos
                  </div>
                  <a href="#" class="list-group-item" id="btn_insertar">Insertar</a>
                  <a href="#" class="list-group-item" id="btn_actualizar">Actualizar</a>
                  <a href="#" class="list-group-item" id="btn_borrar">Borrar</a>
                  <a href="#" class="list-group-item" id="btn_consultar">Consultar</a>
                </div>

              </div>
              <div class="col-md-6">
<!-- Lista para insertar -->
                <div class="list-group" id="list_insertar">
                  <a href="#" class="list-group-item active">
                    <h4 class="list-group-item-heading">Insertar</h4>
                    <p class="list-group-item-text">Formularios a los cuales se tiene acceso y se sirven para insertar informaci&oacute;n dentro de la Base de Datos</p>
                  </a>
                  <a href="../autor/form_autor.php" class="list-group-item ">
                    <h4 class="list-group-item-heading">Autor</h4>
                    <p class="list-group-item-text">Inserta dentro de la base de datos un Autor de alguna pubicacion o artículo.</p>
                  </a>
                  <a href="../revista/form_revista.php" class="list-group-item">
                    <h4 class="list-group-item-heading">Revista</h4>
                    <p class="list-group-item-text">Ingresar dentro de la base de datos una revista.</p>
                  </a>
                  <a href="../articulo/form_articulo.php" class="list-group-item">
                    <h4 class="list-group-item-heading">Art&iacute;culo</h4>
                    <p class="list-group-item-text">Insertar dentro de la base de datos un art&iacute;culo.</p>
                  </a>
                  <a href="../estatus/form_status.php" class="list-group-item">
                    <h4 class="list-group-item-heading">Status</h4>
                    <p class="list-group-item-text">Inserta dentro de la base de datos un status.</p>
                  </a>
                </div>
<!-- lista actualizar -->
                <div class="list-group" id="list_actualizar">
                  <a href="#" class="list-group-item active">
                    <h4 class="list-group-item-heading">Actualizar</h4>
                    <p class="list-group-item-text">Actualizar la informaci&oacute;n de la Base de Datos</p>
                  </a>
                  <a href="#" class="list-group-item ">
                    <h4 class="list-group-item-heading">Actualizar Autor</h4>
                    <p class="list-group-item-text">Actualizar la tabla de Autor dentro de la base de dtaos revista.</p>
                  </a>
                  <a href="#" class="list-group-item">
                    <h4 class="list-group-item-heading">Actualizar Revista</h4>
                    <p class="list-group-item-text">Actualizar la tabla de Revista dentro de la base de dtaos revista.</p>
                  </a>
                  <a href="#" class="list-group-item">
                    <h4 class="list-group-item-heading">Actualizar Art&iacute;culo</h4>
                    <p class="list-group-item-text">Actualizar la tabla de Art&iacute;culos dentro de la base de dtaos revista.</p>
                  </a>
                  <a href="#" class="list-group-item">
                    <h4 class="list-group-item-heading">Actualizar Status</h4>
                    <p class="list-group-item-text">Actualizar la tabla de Status dentro de la base de dtaos revista.</p>
                  </a>
                </div>
<!-- lista borrar -->
                <div class="list-group" id="list_borrar">
                  <a href="#" class="list-group-item active">
                    <h4 class="list-group-item-heading">Borrar</h4>
                    <p class="list-group-item-text">Borrar la informaci&oacute;n de la Base de Datos</p>
                  </a>
                  <a href="#" class="list-group-item ">
                    <h4 class="list-group-item-heading">Borrar Autor</h4>
                    <p class="list-group-item-text">Borrar informacion de la tabla de Autor dentro de la base de dtaos revista.</p>
                  </a>
                  <a href="#" class="list-group-item">
                    <h4 class="list-group-item-heading">Borrar Revista</h4>
                    <p class="list-group-item-text">Borrar informaci&oacute;n de la tabla de Revista dentro de la base de dtaos revista.</p>
                  </a>
                  <a href="#" class="list-group-item">
                    <h4 class="list-group-item-heading">Borrar Art&iacute;culo</h4>
                    <p class="list-group-item-text">Borrar informaci&oacute;n de la tabla de Art&iacute;culos dentro de la base de dtaos revista.</p>
                  </a>
                  <a href="#" class="list-group-item">
                    <h4 class="list-group-item-heading">Borrar Status</h4>
                    <p class="list-group-item-text">Borrar informaci&oacute;n de la tabla de Status dentro de la base de dtaos revista.</p>
                  </a>
                </div>
<!-- lista Consultar -->
                <div class="list-group" id="list_consultar">
                  <a href="#" class="list-group-item active">
                    <h4 class="list-group-item-heading">Consultar</h4>
                    <p class="list-group-item-text">Consultar la informaci&oacute;n de la Base de Datos</p>
                  </a>
                  <a href="#" class="list-group-item ">
                    <h4 class="list-group-item-heading">Consultar Autor</h4>
                    <p class="list-group-item-text">Consultar informacion de la tabla de Autor dentro de la base de dtaos revista.</p>
                  </a>
                  <a href="#" class="list-group-item">
                    <h4 class="list-group-item-heading">Consultar Revista</h4>
                    <p class="list-group-item-text">Consultar informaci&oacute;n de la tabla de Revista dentro de la base de dtaos revista.</p>
                  </a>
                  <a href="#" class="list-group-item">
                    <h4 class="list-group-item-heading">Consultar Art&iacute;culo</h4>
                    <p class="list-group-item-text">Consultar informaci&oacute;n de la tabla de Art&iacute;culos dentro de la base de dtaos revista.</p>
                  </a>
                  <a href="#" class="list-group-item">
                    <h4 class="list-group-item-heading">Consultar Status</h4>
                    <p class="list-group-item-text">Consultar informaci&oacute;n de la tabla de Status dentro de la base de dtaos revista.</p>
                  </a>
                </div>
              </div>
            </div>



          </div>

      </div> <!-- class="site-wrapper-inner" -->
    </div> <!-- class="site-wrapper" -->

   

<?php include ('../layouts/footer.php'); ?>
