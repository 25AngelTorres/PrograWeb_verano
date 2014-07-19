<?php
/*
Contine las clases 
*/

class ContinenteController extends Continente{
	
		
		//Instancia de la clase Posision----No necesario para todos los controladores
		public $muestra_errores = false;
		function __construct(){
			 parent::Continente();
		}

		//Funcion para insertar un equipo
		public function inserta_continente($datos){
			//Solo es para acegurarse que se estan enviando los archivos
		    echo "<pre>";
		      print_r($datos);
		      echo   'Desde Controller';
		    echo "</pre>";

			//Conexion con Posision el cual continene a Modelo y Conexion
			//$continente=new Continente();

			$this->set_nombre($datos['nombre']);

			//Verificar si existen errores
			if(count ($this->errores)>0){
				$this->muestra_errores=true;
			}
			else{
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