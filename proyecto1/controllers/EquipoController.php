<?php
/*
Contine las clases 
*/

class EquipoController extends Equipo{
	
		
		//Instancia de la clase Equipo----No necesario para todos los controladores
		public $muestra_errores = false;
		function __construct(){
			 parent::Equipo();
		}

		//Funcion para insertar un equipo
		public function inserta_equipo($datos, $files){
			//Solo es para acegurarse que se estan enviando los archivos
		    echo "<pre>";
		      print_r($datos);
		      print_r($files);
		      echo   'Desde Controller';

		    echo "</pre>";
		    //die();
			//Conexion con Equipo el cual continene Modelo y Conexion
			//$equipo=new Equipo();

			$this->set_nombre($datos['nombre']);
			$this->set_idpais($datos['idpais']);
			$this->set_escudo($files['escudo']);

			//Verificar si existen errores
			if(count ($this->errores)>0){
				$this->muestra_errores=true;
			}
			else{
				move_uploaded_file($files['escudo']['tmp_name'], "../image/".$files['escudo']['name']);
				//Insertar en la Base de datos
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