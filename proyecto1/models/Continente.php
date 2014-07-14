<?php

class Continente extends Modelo{
    public $nombre_tabla = 'continente';
    public $pk           = 'idcontinente';
    
    public $atributos = array(
        'nombre'=>array(),
    );
    
    public $errores = array( );
    
    private $nombre;
          
    function Continente(){
        parent::Modelo();
    }
    
    public function get_atributos(){
        $rs = array();
        foreach ($this->atributos as $key => $value) {
            $rs[$key]=$this->$key;
        }
        return $rs;
    }
    
    
    public function get_nombre(){
        return $this->nombre;
    } 

    public function set_nombre($valor){

        $er = new Er();
        
        if ( !$er->valida_email($valor) ){
            $this->errores[] = "Este e-mail (".$valor.") no es valido";
        }

        //trim simplemente quita espacios al principio y final
        $this->nombre = trim($valor);

    }

    public function get_password(){
        return $this->baja;
    }
    
    public function set_password($valor){
        $this->password = trim( md5($valor) );
    }
        
    
}

?>
