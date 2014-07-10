<?php 
  session_start();
  include ('../layouts/header.php');
?>


      <div class="jumbotron">
        <h1>Mundial, Brasil 2014</h1>
        <p>P&aacute;gina no oficial de la copa mundial de Brasil 2014, aqui podas ingresar equipos y otros datos a la base de datos, as&iacute; como consultar estadisticas, marcadores y resultados de los partidos.</p>

        <div>
          <center>
            <img src="../image/brasil001.jpg" />
          </center>
        </div>
        <br />
        <p><a href="#" class="btn btn-primary btn-lg" role="button">Learn more &raquo;</a></p>
      </div>




      <div class="page-header">
        <h1>List groups</h1>
      </div>
      <div class="row">
        <div class="col-sm-6">
          <div class="list-group">
            <a href="#" class="list-group-item">
              
                <h4 >Ingresar una ciudad</h4>
                <p class="list-group-item-text">Ingresa en la Base de Datos ciudad de Brasil la cual tendra actividades o poesee un estadio.</p>
              
            </a>
            <a href="#" class="list-group-item">
              <h4 class="list-group-item-heading">Ingresar un estadio</h4>
              <p class="list-group-item-text">Ingresar un estadio de f&uacute;tbol en el cual se jugara un partido dentro de la Base de 
                Datos.</p>
            </a>
            <a href="#" class="list-group-item">
              <h4 class="list-group-item-heading">Ingresar una posisi&oacute;n</h4>
              <p class="list-group-item-text">Ingresar una posisi&oacute;n de un jugador en la Base de Datos.</p>
            </a>
          </div>
        </div><!-- /.col-sm-6 -->
        
        <div class="col-sm-6">
          <div class="list-group">
            <a href="#" class="list-group-item">Ingresar un continente</a>
            <a href="#" class="list-group-item">Ingresar un pa&iacute;s</a>
          </div>


          <div class="btn btn-lg btn-success" role="button">
          <a class="various fancybox.iframe" href="formRevista.html">Fancybox</a>
        </div>


        </div><!-- /.col-sm-4 -->
        
      </div>



      

       



      <div class="page-header">
        <h1>Wells</h1>
      </div>
      <div class="well">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sed diam eget risus varius blandit sit amet non magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Aenean lacinia bibendum nulla sed consectetur.

          <div class="container">
      <div class="row">
        <div class="col-md-12">
          <center><h2>Bootstrap Validator</h2></center>
        </div>
      </div>
      <div class="row">
        <form id="registerForm" class="form-horizontal" role="form">
        <!-- Validador -->
          <div class="col-md-9">
          <!-- Titulo -->
            <div class="form-group">
              <label class="col-sm-3 control-label">Titulo</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="titulo" />
              </div>
            </div>
          <!-- Subtitulo -->
            <div class="form-group">
              <label class="col-sm-3 control-label">Subtitulo</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="subtitulo" />
              </div>
            </div>
          <!-- Portada -->
            <div class="form-group">
              <label class="col-sm-3 control-label">Portada</label>
              <div class="col-sm-9">
                <input type="file" class="form-control" name="portada" />
              </div>
            </div>
          <!-- Fecha -->
            <div class="form-group">
              <label class="col-sm-3 control-label">Fecha</label>
            <!-- Ejemplo 6 de Boostrap datetimepicker -->
              <div class='col-sm-9'>
                <input type='text' class="form-control" id='datetimepicker6'/>
              </div>
            </div>
          <!-- Numero -->
            <div class="form-group">
              <label class="col-sm-3 control-label">N&uacute;mero</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="numero" />
              </div>
            </div>
          <!-- Volumen -->
            <div class="form-group">
              <label class="col-sm-3 control-label">Volumen</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="volumen" />
              </div>
            </div>
          <!-- Clave -->
            <div class="form-group">
              <label class="col-sm-3 control-label">Clave</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="clave" />
              </div>
            </div>
          <!-- Nombre -->
            <div class="form-group">
              <label class="col-sm-3 control-label">Nombre</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="nombre" />
              </div>
            </div>
          <!-- Editorial -->    
            <div class="form-group">
              <label class="col-sm-3 control-label">Editorial</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="editorial" />
              </div>
            </div>
          <!-- Directorio -->
            <div class="form-group">
              <label class="col-sm-3 control-label">Directorio</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="directorio" />
              </div>
            </div>
          </div>
          
          <div class="col-md-2">
            <div class="form-group">
               <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-default">Enviar</button>
                </div>
            </div>
          </div>

        </form>
      </div>

    <!--Fin del container-->
    </div>

        </p>
      </div>
<?php include ('../layouts/footer.php'); ?>
