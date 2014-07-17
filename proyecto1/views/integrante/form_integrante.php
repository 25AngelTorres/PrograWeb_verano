<?php 

  include ('../../libs/adodb5/adodb-pager.inc.php');
  include ('../../libs/adodb5/adodb.inc.php');
  include ('../../models/Conexion.php');
  include ('../../models/Modelo.php');
  include ('../../models/Integrante.php');
  include ('../../models/Entrenador.php');
  include ('../../models/Jugador.php');
  include ('../../controllers/IntegranteController.php');
  include ('../../controllers/JugadorController.php');
  include ('../../controllers/EntrenadorController.php');
  include ('../../libs/Er.php');

  include ('../layouts/header.php');

  if(isset($_POST['nombre']))  {

    /*echo "<pre>";
      print_r($_POST);
      print_r($_FILES);
    echo "</pre>";
    die();*/

//Objeto para controlador de Integrante
    $IntegranteC = new IntegranteController();
    $IntegranteC->inserta_integrante($_POST, $_FILES);
    
    if(isset($_POST['numero'])){
//Objeto para controlador de Integrante
      $JugadorC = new JugadorController();
      $JugadorC->inserta_jugador($_POST);
    }
    
    if($_POST['idpais']>'0'){
//Objeto para controlador de Integrante
      $EntrenadorC = new EntrenadorController();
      $EntrenadorC->inserta_entrenador($_POST);
    }

  }

?>


<div class="row">
	<div class="col-md-12">
		<center><h1><span class="glyphicon glyphicon-th"></span> Insertar integrante</h1></center>
    </div>
</div>
  <br />
<div class="row">
	<form class="form-horizontal" role="form" id='registerForm' method="post" enctype="multipart/form-data">
		<div class="col-md-10">
	        <div class="form-group">
                <label for="id_nombre_integrante" class="col-sm-4 control-label">Nombre del jugador:</label>
            	    <div class="col-sm-8">
                        <input type="text" class="form-control" id="id_nombre_integrante" placeholder="Nombre del integrante" name="nombre">
                  	</div>
             </div>
                 
            <div class="form-group">
                <label for="id_apellido_integrante" class="col-sm-4 control-label">Apellido del jugador:</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="id_apellido_integrante" placeholder="Apellido del integrante" name="apellido">
                  </div>
            </div>
                 
        
            <div class="form-group">
            	<label for="id_edad_integrante" class="col-sm-4 control-label">Edad:</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="id_Edad_integrante" placeholder="Edad" name="Edad">
                  </div>
            </div>
                 
            <div class="form-group">
    	        <label for="id_estatura_integrante" class="col-sm-4 control-label">Estatura:</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="id_estatura_integrante" placeholder="Estatura del integrante" name="estatura">
                  </div>
            </div>	
                 
            <div class="form-group">
                <label for="id_peso_integrante" class="col-sm-4 control-label">Peso:</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="id_peso_integrante" placeholder="Peso del integrante" name="peso">
                  </div>
            </div>
        
            <div class="form-group">
                <label for="id_foto_integrante" class="col-sm-4 control-label">Foto: </label>
                  <div class="col-sm-8">
                    <input type="file" class="form-control" id="id_foto_integrante" name="foto">
                  </div>
            </div>
                  
            <div class="form-group">
                <label for="id_equipo_integrante" class="col-sm-4 control-label">Equipo: </label>
                  <div class="col-sm-8">
                    <select id="id_equipo_integrante" class="form-control" name="idequipo">
 	                   <option value="0">Seleccione un equipo</option>
                     <option value="1">Brasil</option>
                     <option value="2">Mexico</option>
                    </select>
                  </div>
            </div>
                    
			      <div class="form-group">
		            <div class="col-sm-offset-2 col-sm-10">
        	        <a class="btn btn-primary btn-lg" role="button" id="MostrarJugador">Jugador &raquo;</a>
                    <a class="btn btn-primary btn-lg" role="button" id="MostrarEntrenador">Entrenador &raquo;</a>
                </div>
            </div>

<!-- Formulario de jugador -->
            <div id="form_tipo_jugador">
              <div class="form-group">
                    <label for="id_numero_jugador" class="col-sm-4 control-label">N&uacute;mero del jugador:</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="id_numero_jugador" placeholder="N&uacute;mero del jugador" name="numero">
                      </div>
                 </div>

                 <div class="form-group">
                      <label for="id_posision_jugador" class="col-sm-4 control-label">Posision: </label>
                      <div class="col-sm-8">
                        <select id="id_posision_jugador" class="form-control" name="idposision">
                          <option value="0">Seleccione una Posision</option>
                          <option value="1">Defensa</option>
                          <option value="2">Medio</option>
                          <option value="3">Delantero</option>
                          <option value="4">Portero</option>
                          <option value="5">Perro (Solo si es Luis Suarez)</option>
                        </select>
                      </div>
                  </div>
          </div>
<!-- Formulario para entrenador -->
          <div id="form_tipo_entrenador">
            <div class="form-group">
                      <label for="id_pais_entrenador" class="col-sm-4 control-label">Pa&iacute;s del Entrenador: </label>
                      <div class="col-sm-8">
                        <select id="id_pais_entrenador" class="form-control" name="idpais">
                          <option value="0">Seleccione un pais</option>
                            <option value="1">Mexico</option>
                            <option value="2">Alemania</option>
                        </select>
                      </div>
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




<?php include ('../layouts/footer.php'); ?>