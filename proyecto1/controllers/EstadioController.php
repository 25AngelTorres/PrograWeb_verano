<?php
/*
Contine las clases 
*/

class EstadioController extends Estadio{
		
		//Instancia de la clase Estadio----No necesario para todos los controladores
		public $muestra_errores = false;
		function __construct(){
			 parent::Estadio();
		}

		//Funcion para insertar un equipo
		public function inserta_estadio($datos){
			//Solo es para acegurarse que se estan enviando los archivos
		    echo "<pre>";
		      print_r($datos);
		      echo   'Desde Controller';
		    echo "</pre>";

			//Conexion con Estadio el cual continene a Modelo y Conexion
			//$estadio=new Estadio();

			$this->set_nombre($datos['Nombre']);
			$this->set_idciudad($datos['idciudad']);

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