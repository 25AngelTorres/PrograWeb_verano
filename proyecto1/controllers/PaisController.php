<?php
/*
Contine las clases 
*/

//	class PaisController extends Equipo{
	class PaisController {
		
		//Instancia de la clase Pais----No necesario para todos los controladores
		public $muestra_errores = false;
		function __construct(){
			 //parent::Equipo();
		}

		//Funcion para insertar un pais
		public function inserta_pais($datos){
			//Solo es para acegurarse que se estan enviando los archivos
		    echo "<pre>";
		      print_r($datos);
		      echo   'Desde Controller';
		    echo "</pre>";

			//Conexion con Posision el cual continene a Modelo y Conexion
			$pais=new Pais();

			$pais->set_nombre($datos['nombre']);
			$pais->set_idcontinente($datos['idcontinente']);
			$pais->set_bandera($datos['bandera']);


			//Verificar si existen errores
			if(count ($pais->errores)>0){
				print_r($pais->errores);
			}

			//Detener un script *die();

		}
	}
?>