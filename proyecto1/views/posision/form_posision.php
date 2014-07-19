<?php 

  include ('../../libs/adodb5/adodb-pager.inc.php');
  include ('../../libs/adodb5/adodb.inc.php');
  include ('../../models/Conexion.php');
  include ('../../models/Modelo.php');
  include ('../../models/Posision.php');
  include ('../../controllers/PosisionController.php');
  include ('../../libs/Er.php');

  include ('../layouts/header.php');

//Inicializar el controlador
    $PosisionC = new PosisionController();
  if(isset($_POST['nombre']))  {
//    echo "<pre>";
//      print_r($_POST);
//    echo "</pre>";

    $PosisionC->inserta_posision($_POST);
  }

?>

<div class="row">
        <div class="col-md-12">
      <center><h1><span class="glyphicon glyphicon-th"></span> Insertar Posision</h1></center>
        </div>
      </div>
      <br />
      <?php
        $PosisionC->errores();
      ?>
      <div class="row">
        <form class="form-horizontal" role="form" id="registerForm" method="post">
          <div class="col-md-10">
            <div class="form-group">
              <label for="id_nombre_posision" class="col-sm-4 control-label">Nombre de la posicion: </label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="id_nombre_posision" placeholder="Nombre de la posision" name="nombre" value="<?php echo $PosisionC->get_nombre(); ?>">
              </div>
            </div>

            <div class="form-group">
              <label for="id_abreviatura_posision" class="col-sm-4 control-label">Abreviatura: </label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="id_abreviatura_posision" placeholder="Abreviatura de la posision" name="abreviatura" value="<?php echo $PosisionC->get_abreviatura(); ?>">
              </div>
            </div>
          </div>
        <div class="col-md-2">
          <div class="form-group">
             <div class="col-sm-offset-2 col-sm-10">
                <input  type="submit" class="btn btn-default" value="Enviar" />
              </div>
          </div>
        </div>
        </form>
      </div>
    </div>

    

    <!--Fin del conteiner-->
    </div>    

        
      
<?php include ('../layouts/footer.php'); ?>
