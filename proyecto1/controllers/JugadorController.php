<?php
/*
Contine las clases 
*/

//	class JugadorController extends Equipo{
	class JugadorController extends Jugador{
		
		//Instancia de la clase Jugador----No necesario para todos los controladores
		public $muestra_errores = false;
		function __construct(){
			 parent::Jugador();
		}

		//Funcion para insertar un pais
		public function inserta_jugador($datos){
			//Solo es para acegurarse que se estan enviando los archivos
		    echo "<pre>";
		      print_r($datos);
		      echo   'Desde Controller';
		    echo "</pre>";

			//Conexion con Posision el cual continene a Modelo y Conexion
			//$jugador=new Jugador();

			$this->set_numero($datos['numero']);
			$this->set_idposision($datos['idposision']);
			

			//Verificar si existen errores
			if(count ($this->errores)>0){
				$this->muestra_errores=true;
			}
			else{
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