<?php

class Entrenador extends Modelo{
    public $nombre_tabla = 'entrenador';
    public $pk           = 'identrenador';
    
    public $atributos = array(
        'idpais'=>array(),
    );

    public $errores = array( );
    
   private $ipais;

//Instancia del objeto modelo para implementar la conexion con la base de datos
    function Integrante(){
        parent::Modelo();
    }
    
    public function get_atributos(){
        $rs = array();
            foreach ($this->atributos as $key => $value) {
            $rs[$key]=$this->$key;
        }
        return $rs;
    }
    
//idpais
    public function get_idpais(){
        return $this->idpais;
    } 
    public function set_idpais($valor){

        //objeto de la clase Er
        $er = new Er();

        if ( !$er->valida_numero_entero($valor) ){
            $this->errores[] = 'Este id ('.$valor.'). No es valido';
        }

        //trim simplemente quita espacios al principio y final de la cadena
        $this->idpais = trim($valor);
    }
           
}

?>
