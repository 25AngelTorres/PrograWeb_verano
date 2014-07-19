<?php
/*
Contine las clases 
*/

class IntegranteController extends Integrante{
		
		//Instancia de la clase Integrante----No necesario para todos los controladores
		public $muestra_errores = false;
		function __construct(){
			 parent::Integrante();
		}

		//Funcion para insertar un pais
		public function inserta_integrante($datos, $files){
			//Solo es para acegurarse que se estan enviando los archivos
		    echo "<pre>";
		      print_r($datos);
		      print_r($files);
		      echo   'Desde Controller Integrante';
		    echo "</pre>";

			//Conexion con Posision el cual continene a Modelo y Conexion
			//$integrante=new Integrante();

			$this->set_nombre($datos['nombre']);
			$this->set_apellido($datos['apellido']);
			$this->set_peso($datos['peso']);
			$this->set_estatura($datos['estatura']);
			$this->set_foto($files['foto']);
			$this->set_edad($datos['Edad']);
			$this->set_idequipo($datos['idequipo']);
			

			//Verificar si existen errores
			if(count ($this->errores)>0){
				$this->muestra_errores=true;
			}
			else{
				move_uploaded_file($files['foto']['tmp_name'], "../image/".$files['foto']['name']);
				//Insertar en la base de datos
				$this->inserta($this->get_atributos());
				echo '<div class="alert alert-success" role="alert">Insercion Correcta</div>';
				}

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