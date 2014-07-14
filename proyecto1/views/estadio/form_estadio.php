<?php 

  include ('../../libs/adodb5/adodb-pager.inc.php');
  include ('../../libs/adodb5/adodb.inc.php');
  include ('../../models/Conexion.php');
  include ('../../models/Modelo.php');
  include ('../../models/Estadio.php');
  include ('../../controllers/EstadioController.php');
  include ('../../libs/Er.php');

  include ('../layouts/header.php');

  if(isset($_POST['Nombre']))  {
//  echo "<pre>";
//      print_r($_POST);
//    echo "</pre>";

//    Inicializar el controlador
    $EstadioC = new EstadioController();
    $EstadioC->inserta_estadio($_POST);
  }
?>

<div class="row">
        <div class="col-md-12">
			<center><h1><span class="glyphicon glyphicon-th"></span> Insertar Estadio</h1></center>
        </div>
      </div>
      <br />
    <div class="row">
      <form class="form-horizontal" role="form" id="registerForm" method="post">
        <div class="col-md-10">
            <div class="form-group">
              <label for="id_nombre_estadio" class="col-sm-4 control-label">Nombre del estadio: </label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="id_nombre_estadio" placeholder="Nombre del estadio" name="Nombre">
              </div>
            </div>

             <div class="form-group">
              <label for="id_ciudad_estadio" class="col-sm-4 control-label">Ciudad donde se encuentra el estadio: </label>
              <div class="col-sm-8">
                <select id="id_ciudad_estadio" class="form-control" name="idciudad">
                  <option>Selecciona Ciudad</option>
                  <option value="1">Rio</option>
                </select>
              </div>
            </div>
        </div>
        <div class="col-md-2">
          <div class="form-group">
             <div class="col-sm-offset-2 col-sm-10">
                <input type="submit" class="btn btn-default" value="Enviar">
              </div>
          </div>
        </div>
        </form>
      </div>
  	</div>


    <!--Fin del conteiner-->
    </div>    

        
      
<?php include ('../layouts/footer.php'); ?>
