<?php 

  include ('../../libs/adodb5/adodb-pager.inc.php');
  include ('../../libs/adodb5/adodb.inc.php');
  include ('../../models/Conexion.php');
  include ('../../models/Modelo.php');
  //include ('../../models/Articulo.php');
  //include ('../../controllers/ArticuloController.php');
  include ('../../libs/Er.php');

  include ('../layouts/header.php');

/*
  if(isset($_POST['nombre']))  {
    //Inicializar el controlador
    $ArticuloC = new ArticuloController();
    $ArticuloC->inserta_articulo($_POST);
  }
*/
?>
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
                <div class="col-md-6">
                
<!-- Nombre -->
                  <div class="form-group">
                    <label for="articulo_nombre" class="col-sm-3 control-label">Titulo:</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" name="nombre" id="articulo_nombre" />
                    </div>
                  </div>
<!-- Fecha de creacion -->
                  <div class="form-group">
                    <label for="datetimepicker6" class="col-sm-3 control-label">Fecha de creacion: </label>
                  <!-- Ejemplo 6 de Boostrap datetimepicker -->
                    <div class='col-sm-6'>
                      <input type='text' class="form-control" id='datetimepicker6' name="fecha_creacion"/>
                    </div>
                  </div>
<!-- resumen -->
                  <div class="form-group">
                    <label for="articulo_resumen" class="col-sm-3 control-label">Resumen:</label>
                    <div class="col-sm-6">
                      <textarea class="form-cntrol" name="resumen" id="articulo_resumen"></textarea>
                      
                    </div>
                  </div>
<!-- Portada -->
                  <div class="form-group">
                    <label for="revista_portada" class="col-sm-3 control-label">Portada:</label>
                    <div class="col-sm-6">
                      <input type="file" class="form-control" name="portada" id="revista_portada" />
                    </div>
                  </div>
<!-- Numero -->
                  <div class="form-group">
                    <label for="revista_numero" class="col-sm-3 control-label">N&uacute;mero: </label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" name="numero" id="revista_numero" />
                    </div>
                  </div>
<!-- Volumen -->
                  <div class="form-group">
                    <label for="revista_volumen" class="col-sm-3 control-label">Volumen: </label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" name="volumen" id="revista_volumen" />
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
<!-- Archivo_pdf -->
                  <div class="form-group">
                    <label for="articulo_archivo_pdf" class="col-sm-3 control-label">Archivo pdf:</label>
                    <div class="col-sm-6">
                      <input type="file" class="form-control" name="archivo_pdf" id="articulo_archivo_pdf" />
                    </div>
                  </div>
<!-- Status -->
                  <div class="form-group">
                    <label for="articulo_status" class="col-sm-3 control-label">Estatus: </label>
                    <div class="col-sm-6">
                      <select name="id_status" id="articulo_status" class="form-control">
                        <option>Elige un estatus</option>
                        <option value="1">Estatus 1</option>
                        <option value="2">Estatus 2</option>
                        <option value="3">Estatus 3</option>
                      </select>
                    </div>
                  </div>
<!-- Nombre -->
                  <div class="form-group">
                    <label for="revista_nombre" class="col-sm-3 control-label">Nombre: </label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" name="nombre" id="revista_nombre" />
                    </div>
                  </div>
<!-- Editorial -->    
                  <div class="form-group">
                    <label for="revista_editorial" class="col-sm-3 control-label">Editorial: </label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" name="editorial" id="revista_editorial" />
                    </div>
                  </div>
<!-- Directorio -->
                  <div class="form-group">
                    <label for="revista_directorio" class="col-sm-3 control-label">Directorio: </label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" name="directorio" id="revista_directorio" />
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

