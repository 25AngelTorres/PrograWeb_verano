<?php 

  include ('../../libs/adodb5/adodb-pager.inc.php');
  include ('../../libs/adodb5/adodb.inc.php');
  include ('../../models/Conexion.php');
  include ('../../models/Modelo.php');
  include ('../../models/Articulo.php');
  include ('../../controllers/ArticuloController.php');
  include ('../../libs/Er.php');

  include ('../layouts/header.php');


  if(isset($_POST['nombre']))  {
    //Inicializar el controlador
    $ArticuloC = new ArticuloController();
    $ArticuloC->inserta_articulo($_POST);
  }

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
                      <input type="text" class="form-control" name="nombre" id="articulo_nombre" placeholder="Nombre del art&iacute;culo" />
                    </div>
                  </div>
<!-- Fecha de creacion -->
                  <div class="form-group">
                    <label for="datetimepicker6" class="col-sm-3 control-label">Fecha: </label>
                  <!-- Ejemplo 6 de Boostrap datetimepicker -->
                    <div class='col-sm-6'>
                      <input type='text' class="form-control" id='datetimepicker6' name="fecha_creacion"/>
                    </div>
                  </div>
<!-- resumen -->
                  <div class="form-group">
                    <label for="articulo_resumen" class="col-sm-3 control-label">Resumen:</label>
                    <div class="col-sm-6">
                      <textarea class="form-cntrol" name="resumen" id="articulo_resumen" placeholder="Resumen del art&iacute;culo" cols="40"></textarea>
                    </div>
                  </div>
<!-- Abstract -->
                  <div class="form-group">
                    <label for="articulo_abstract" class="col-sm-3 control-label">Abstract:</label>
                    <div class="col-sm-6">
                      <textarea class="form-cntrol" name="abstract" id="articulo_abstract" placeholder="Abstract del art&iacute;culo" cols="40"></textarea>
                    </div>
                  </div>
<!-- Introduccion -->
                  <div class="form-group">
                    <label for="articulo_introduccion" class="col-sm-3 control-label">Introducci&oacute;n:</label>
                    <div class="col-sm-6">
                      <textarea class="form-cntrol" name="introduccion" id="articulo_introduccion" placeholder="Introducci&oacute;n del art&iacute;culo" cols="40"></textarea>
                    </div>
                  </div>
<!-- Metodologia -->
                  <div class="form-group">
                    <label for="articulo_metodologia" class="col-sm-3 control-label">Metodolog&iacute;a:</label>
                    <div class="col-sm-6">
                      <textarea class="form-cntrol" name="metodologia" id="articulo_metodologia" placeholder="Metodologia del art&iacute;culo" cols="40"></textarea>
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
<!-- Contenido -->
                  <div class="form-group">
                    <label for="articulo_contenido" class="col-sm-3 control-label">Contenido:</label>
                    <div class="col-sm-6">
                      <textarea class="form-cntrol" name="contenido" id="articulo_contenido" placeholder="Contenido del art&iacute;culo" cols="40"></textarea>
                    </div>
                  </div>
<!-- Conclusiones -->
                  <div class="form-group">
                    <label for="articulo_conclusiones" class="col-sm-3 control-label">Conclusiones:</label>
                    <div class="col-sm-6">
                      <textarea class="form-cntrol" name="conclusiones" id="articulo_conclusiones" placeholder="Conclusiones del art&iacute;culo" cols="40"></textarea>
                    </div>
                  </div>
<!-- Agradecimientos -->
                  <div class="form-group">
                    <label for="articulo_agradecimientos" class="col-sm-3 control-label">Agradecimientos:</label>
                    <div class="col-sm-6">
                      <textarea class="form-cntrol" name="agradecimientos" id="articulo_agradecimientos" placeholder="Agradecimientos del art&iacute;culo" cols="40"></textarea>
                    </div>
                  </div>
<!-- Referencias -->
                  <div class="form-group">
                    <label for="articulo_referencias" class="col-sm-3 control-label">Referencias:</label>
                    <div class="col-sm-6">
                      <textarea class="form-cntrol" name="referencias" id="articulo_referencias" placeholder="Referencias del art&iacute;culo" cols="40"></textarea>
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

