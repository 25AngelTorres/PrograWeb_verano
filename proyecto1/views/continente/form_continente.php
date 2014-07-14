<?php 

  include ('../../libs/adodb5/adodb-pager.inc.php');
  include ('../../libs/adodb5/adodb.inc.php');
  include ('../../models/Conexion.php');
  include ('../../models/Modelo.php');
  include ('../../models/Continente.php');
  //include ('../../controllers/siteController/EquipoController.php');
  include ('../../libs/Er.php');

  include ('../layouts/header.php');

  if(isset($_POST['nombre']))  {
    echo "<pre>";
      print_r($_POST);
    echo "</pre>";
  }

?>

    <div class="row">
        <div class="col-md-12">
      <center><h1><span class="glyphicon glyphicon-th"></span> Insertar Continente</h1></center>
        </div>
      </div>
      <br />
      <div class="row">
        <form class="form-horizontal" role="form" id="registerForm" method="post">
          <div class="col-md-10">
            <div class="form-group">
              <label for="id_nombre_continente" class="col-sm-4 control-label">Nombre del continente: </label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="id_nombre_continente" placeholder="Nombre del continente" name="nombre">
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
      </div>

    <!--Fin del conteiner-->
    </div>  

        
      
<?php include ('../layouts/footer.php'); ?>
