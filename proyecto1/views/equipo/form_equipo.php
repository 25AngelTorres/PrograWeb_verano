<?php 

  include ('../../libs/adodb5/adodb-pager.inc.php');
  include ('../../libs/adodb5/adodb.inc.php');
  include ('../../models/Conexion.php');
  include ('../../models/Modelo.php');
  include ('../../models/Equipo.php');
  include ('../../controllers/EquipoController.php');
  include ('../../libs/Er.php');

  include ('../layouts/header.php');

//Inicializar el controlador
    $EquipoC = new EquipoController();
  if(isset($_POST['nombre']))  {
    /*echo "<pre>";
      print_r($_POST);
      print_r($_FILES);
    echo "</pre>";
    die();*/
    
    $EquipoC->inserta_equipo($_POST,$_FILES);
  }

?>
<div class="row">
	<div class="col-md-12">
		<center><h1><span class="glyphicon glyphicon-th"></span> Insertar Equipo</h1></center>
	</div>
</div>
<br />
<?php
  $EquipoC->errores();
?>
<div class="row">
  <form class="form-horizontal" role="form" id="registerForm" method="post" enctype="multipart/form-data">
	 <div class="col-md-10">
		<div class="form-group">
			<label for="id_nombre_posision" class="col-sm-4 control-label">Nombre del equipo: </label>
			<div class="col-sm-8">
				<input type="text" class="form-control" id="id_nombre_posision" placeholder="Nombre del equipo" name="nombre" value="<?php echo $EquipoC->get_nombre(); ?>" />
			</div>
		</div>

		<div class="form-group">
			<label for="id_pais_equipo" class="col-sm-4 control-label">Pa&iacute;s Representante: </label>
			<div class="col-sm-8">
				<select id="id_pais_equipo" class="form-control" name="idpais">
					<option>Seleccione un pais</option>
					<option value="1">Mexico</option>
					<option value="2">Alemania</option>
                </select>
			</div>
		</div>

        <div class="form-group">
          	<label for="id_escudo_equipo" class="col-sm-4 control-label">Escudo: </label>
          	<div class="col-sm-8">
            	<input type="file" class="form-control" id="id_escudo_equipo" name="escudo" value="<?php echo $EquipoC->get_escudo();?>" />
          	</div>
        </div>
    </div>    

        <div class="col-md-2">
          <div class="form-group">
             <div class="col-sm-offset-2 col-sm-10">
                <input type="submit" value="Enviar"  />
             </div>
          </div>
        </div>
	</form>
	</div>
</div>



    

    <!--Fin del conteiner-->
    </div>    
      
<?php include ('../layouts/footer.php'); ?>
