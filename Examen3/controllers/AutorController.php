<?php
/*
Contine las clases 
*/

//	class AutorController extends Equipo{
	class AutorController {
		
		//Instancia de la clase Autor----No necesario para todos los controladores
		public $muestra_errores = false;
		function __construct(){
			 //parent::Equipo();
		}

		//Funcion para insertar un equipo
		public function inserta_autor($datos){
			//Solo es para acegurarse que se estan enviando los archivos
		    echo "<pre>";
		      print_r($datos);
		      echo   'Desde Controller';

		    echo "</pre>";
			//Conexion con Equipo el cual continene Modelo y Conexion
			$autor=new Autor();

			$autor->set_nombre($datos['nombre']);
			$autor->set_apellido($datos['apellido']);
			$autor->set_email($datos['email']);

			//Verificar si existen errores
			if(count ($autor->errores)>0){
				print_r($autor->errores);
			}

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