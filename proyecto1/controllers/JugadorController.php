<?php
/*
Contine las clases 
*/

//	class JugadorController extends Equipo{
	class JugadorController {
		
		//Instancia de la clase Jugador----No necesario para todos los controladores
		public $muestra_errores = false;
		function __construct(){
			 //parent::Equipo();
		}

		//Funcion para insertar un pais
		public function inserta_jugador($datos){
			//Solo es para acegurarse que se estan enviando los archivos
		    echo "<pre>";
		      print_r($datos);
		      echo   'Desde Controller';
		    echo "</pre>";

			//Conexion con Posision el cual continene a Modelo y Conexion
			$jugador=new Jugador();

			$jugador->set_numero($datos['numero']);
			$jugador->set_idposision($datos['idposision']);
			

			//Verificar si existen errores
			if(count ($jugador->errores)>0){
				print_r($jugador->errores);
			}

			//Detener un script *die();

		}
	}
?>