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
		public function inserta_pais($datos, $files){
			//Solo es para acegurarse que se estan enviando los archivos
		    echo "<pre>";
		      print_r($datos);
		      print_r($files);
		      echo   'Desde Controller';
		    echo "</pre>";
		    //die();
			//Conexion con Posision el cual continene a Modelo y Conexion
			$pais=new Pais();

			$pais->set_nombre($datos['nombre']);
			$pais->set_idcontinente($datos['idcontinente']);
			$pais->set_bandera($files['bandera']);


			//Verificar si existen errores
			if(count ($pais->errores)>0){
				print_r($pais->errores);
				die();
			}
			else{
				move_uploaded_file($files['bandera']['tmp_name'], "../image/".$files['bandera']['name']);
			}

			//Detener un script *die();
			
			//Insertar en la base de datos
			$pais->inserta($pais->get_atributos());

		}
	}
?>