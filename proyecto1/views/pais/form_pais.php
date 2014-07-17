<?php 

  include ('../../libs/adodb5/adodb-pager.inc.php');
  include ('../../libs/adodb5/adodb.inc.php');
  include ('../../models/Conexion.php');
  include ('../../models/Modelo.php');
  include ('../../models/Pais.php');
  include ('../../controllers/PaisController.php');
  include ('../../libs/Er.php');

  include ('../layouts/header.php');

  if(isset($_POST['nombre']))  {
  /*echo "<pre>";
    print_r($_POST);
    print_r($_FILES); 
  echo "</pre>";
  die();*/
  //Crear objeto del controlador
    $PaisC= new PaisController();
    $PaisC->inserta_pais($_POST, $_FILES);
  }

?>


    <div class="row">
        <div class="col-md-12">
      <center><h1><span class="glyphicon glyphicon-th"></span> Insertar Pa&iacute;s</h1></center>
        </div>
      </div>
      <br />
      <div class="row">
        <form class="form-horizontal" role="form" id="registerForm" method="post" enctype="multipart/form-data">
          <div class="col-md-10">
            <div class="form-group">
              <label for="id_nombre_pais" class="col-sm-4 control-label">Nombre del pa&iacute;s:</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="id_nombre_pais" placeholder="Nombre del pa&iacute;s" name="nombre">
              </div>
            </div>

            <div class="form-group">
              <label for="id_continente_continente" class="col-sm-4 control-label">Continente: </label>
              <div class="col-sm-8">
                <select id="id_continente_continente" class="form-control" name="idcontinente">
                  <option>Selecciona un continente</option>
                  <option value="1">America</option>
                  <option value="2">Europa</option>
                </select>
              </div>
            </div>

            <div class="form-group">
              <label for="id_bandera_continente" class="col-sm-4 control-label">Bandera: </label>
              <div class="col-sm-8">
                <input type="file" class="form-control" id="id_bandera_pais" name="bandera">
              </div>
            </div>

        </div>
        <div class="col-md-2">
          <div class="form-group">
             <div class="col-sm-offset-2 col-sm-10">
                <input type="submit" class="btn btn-default" value="Enviar" />
              </div>
          </div>
        </div>
        </form>
      </div>


    

    <!--Fin del conteiner-->
    </div>    
        
      
<?php include ('../layouts/footer.php'); ?>
