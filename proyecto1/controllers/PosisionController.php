<?php
/*
Contine las clases 
*/

//	class PosisionController extends Equipo{
	class PosisionController {
		
		//Instancia de la clase Posision----No necesario para todos los controladores
		public $muestra_errores = false;
		function __construct(){
			 //parent::Equipo();
		}

		//Funcion para insertar un equipo
		public function inserta_posision($datos){
			//Solo es para acegurarse que se estan enviando los archivos
		    echo "<pre>";
		      print_r($datos);
		      echo   'Desde Controller';
		    echo "</pre>";

			//Conexion con Posision el cual continene a Modelo y Conexion
			$posision=new Posision();

			$posision->set_nombre($datos['nombre']);
			$posision->set_abreviatura($datos['abreviatura']);

			//Verificar si existen errores
			if(count ($posision->errores)>0){
				print_r($posision->errores);
			}

			//Detener un script *die();

		}
	}
?>