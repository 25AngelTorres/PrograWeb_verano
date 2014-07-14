<?php
/*
Contine las clases 
*/

//	class ContinenteController extends Equipo{
	class ContinenteController {
		
		//Instancia de la clase Posision----No necesario para todos los controladores
		public $muestra_errores = false;
		function __construct(){
			 //parent::Equipo();
		}

		//Funcion para insertar un equipo
		public function inserta_continente($datos){
			//Solo es para acegurarse que se estan enviando los archivos
		    echo "<pre>";
		      print_r($datos);
		      echo   'Desde Controller';
		    echo "</pre>";

			//Conexion con Posision el cual continene a Modelo y Conexion
			$continente=new Continente();

			$continente->set_nombre($datos['nombre']);

			//Verificar si existen errores
			if(count ($continente->errores)>0){
				print_r($continente->errores);
			}

			//Detener un script *die();

		}
	}
?>