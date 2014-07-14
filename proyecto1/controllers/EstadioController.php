<?php
/*
Contine las clases 
*/

//	class EquipoController extends Equipo{
	class EstadioController {
		
		//Instancia de la clase Estadio----No necesario para todos los controladores
		public $muestra_errores = false;
		function __construct(){
			 //parent::Equipo();
		}

		//Funcion para insertar un equipo
		public function inserta_estadio($datos){
			//Solo es para acegurarse que se estan enviando los archivos
		    echo "<pre>";
		      print_r($datos);
		      echo   'Desde Controller';
		    echo "</pre>";

			//Conexion con Estadio el cual continene a Modelo y Conexion
			$estadio=new Estadio();

			$estadio->set_nombre($datos['Nombre']);
			$estadio->set_idciudad($datos['idciudad']);

			//Verificar si existen errores
			if(count ($estadio->errores)>0){
				print_r($estadio->errores);
			}

			//Detener un script *die();

		}
	}
?>