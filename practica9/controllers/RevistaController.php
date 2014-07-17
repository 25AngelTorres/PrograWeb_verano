<?php
/*
Contine las clases 
*/

//	class RevistaController extends Equipo{
	class RevistaController {
		
		//Instancia de la clase Revista----No necesario para todos los controladores
		public $muestra_errores = false;
		function __construct(){
			 //parent::Equipo();
		}

		//Funcion para insertar una revista
		public function inserta_revista($datos, $files){
			//Solo es para acegurarse que se estan enviando los archivos
			
			$portada_name=$files['portada']['name'];
		    $portada_size=$files['portada']['size'];
		    $portada_type=$files['portada']['type'];
		    $portada_tmp_name=$files['portada']['tmp_name'];

		    echo "<pre>";
		      print_r($datos);
		      print_r($files);
		    echo "</pre> desde controller";

		    //die();
		    
			//Conexion con Equipo el cual continene Modelo y Conexion
			$revista=new Revista();

			$revista->set_nombre($datos['nombre']);
			$revista->set_portada($files['portada']);
			$revista->set_fecha($datos['fecha']);
			$revista->set_volumen($datos['volumen']);
			$revista->set_titulo($datos['titulo']);
			$revista->set_subtitulo($datos['subtitulo']);
			$revista->set_numero($datos['numero']);
			$revista->set_clave($datos['clave']);
			$revista->set_directorio($datos['directorio']);
			$revista->set_editorial($datos['editorial']);
			$revista->set_id_status($datos['id_status']);

			//Verificar si existen errores
			if(count ($revista->errores)>0){
				print_r($revista->errores);
				die();
			}

			else{
				//Copiar la direccion del archivo a un nueva carpeta
				move_uploaded_file($portada_tmp_name, "../imagen/".$portada_name);

			}


			

			//Insertar en la Base de datos
			//$revista->inserta($revista->get_atributos());

			//Detener un script *die();

		}

		/*public function validaUsuario($datos){
			$rs = $this->consulta_sql(" select * from usuarios where email = '".$datos['email']."'  ");
        	$rows = $rs->GetArray();
        	if(count($rows) > 0){
        		if ($rows['0']['password']== md5($datos['password'])) {
        			$this->iniciarSesion($rows['0']['rol'],$rows['0']['email']);
        		}else{
		     		$this->muestra_errores = true;
		     		$this->errores[] = 'Password incorrecto';
		     	}
	     	}else{
	     		$this->muestra_errores = true;
	     		$this->errores[] = 'este email no existe';
	     	}

		}
		public function iniciarSesion($rol,$email){
			$_SESSION['user'] = $rol;
			$_SESSION['email'] = $email;
			header("Location: inicio.php");
		}

		public function cerrarSesion(){
			session_destroy();
			header("Location: inicio.php");
		}*/
	}
?>
