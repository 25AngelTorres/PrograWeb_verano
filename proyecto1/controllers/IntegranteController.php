<?php
/*
Contine las clases 
*/

//	class IntegranteController extends Equipo{
	class IntegranteController {
		
		//Instancia de la clase Integrante----No necesario para todos los controladores
		public $muestra_errores = false;
		function __construct(){
			 //parent::Equipo();
		}

		//Funcion para insertar un pais
		public function inserta_integrante($datos){
			//Solo es para acegurarse que se estan enviando los archivos
		    echo "<pre>";
		      print_r($datos);
		      echo   'Desde Controller';
		    echo "</pre>";

			//Conexion con Posision el cual continene a Modelo y Conexion
			$integrante=new Integrante();

			$integrante->set_nombre($datos['nombre']);
			$integrante->set_apellido($datos['apellido']);
			$integrante->set_peso($datos['peso']);
			$integrante->set_estatura($datos['estatura']);
			$integrante->set_foto($datos['foto']);
			$integrante->set_edad($datos['Edad']);
			$integrante->set_idequipo($datos['idequipo']);
			

			//Verificar si existen errores
			if(count ($integrante->errores)>0){
				print_r($integrante->errores);
			}

			//Detener un script *die();

		}
	}
?>