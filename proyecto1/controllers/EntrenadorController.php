<?php
/*
Contine las clases 
*/

//	class EntrenadorController extends Equipo{
	class EntrenadorController {
		
		//Instancia de la clase Posision----No necesario para todos los controladores
		public $muestra_errores = false;
		function __construct(){
			 //parent::Equipo();
		}

		//Funcion para insertar un equipo
		public function inserta_Entrenador($datos){
			//Solo es para acegurarse que se estan enviando los archivos
		    echo "<pre>";
		      print_r($datos);
		      echo   'Desde Controller';
		    echo "</pre>";

			//Conexion con Posision el cual continene a Modelo y Conexion
			$entrenador=new Entrenador();

			$entrenador->set_idpais($datos['idpais']);

			//Verificar si existen errores
			if(count ($entrenador->errores)>0){
				print_r($entrenador->errores);
			}

			//Detener un script *die();

		}
	}
?>