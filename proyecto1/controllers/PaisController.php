<?php
/*
Contine las clases 
*/

//	class PaisController extends Equipo{
	class PaisController extends Pais{
		
		//Instancia de la clase Pais----No necesario para todos los controladores
		public $muestra_errores = false;
		function __construct(){
			 parent::Pais();
		}

		//Funcion para insertar un pais
		public function inserta_pais($datos, $files){
			//Solo es para acegurarse que se estan enviando los archivos
		    echo "<pre>";
		      print_r($datos);
		      print_r($files);
		      echo   'Desde Controller';
		    echo "</pre>";
		    //die();
			//Conexion con Posision el cual continene a Modelo y Conexion
			//$pais=new Pais();

			$this->set_nombre($datos['nombre']);
			$this->set_idcontinente($datos['idcontinente']);
			$this->set_bandera($files['bandera']);


			//Verificar si existen errores
			if(count ($this->errores)>0){
				$this->muestra_errores=true;
			}
			else{
				move_uploaded_file($files['bandera']['tmp_name'], "../image/".$files['bandera']['name']);
				//Insertar en la base de datos
				$this->inserta($this->get_atributos());
				echo '<div class="alert alert-success" role="alert">Insercion Correcta</div>';
				}
				//Detener un script *die();

			}

			public function errores(){
				if ($this->muestra_errores) {
					echo '<div class="alert alert-danger">';
	                	foreach ($this->errores as $value) {
	                  	echo "<p>".$value."</p>";
	                	}  
	            	echo '</div>';
				}
			}
	}
?>