<?php

class Pais extends Modelo{
    public $nombre_tabla = 'pais';
    public $pk           = 'idpais';
    
    public $atributos = array(
        'nombre'=>array(),
        'bandera'=>array(),
        'idcontinente'=>array(),
    );
    
    public $errores = array( );
    
    private $nombre;
    private $bandera;
    private $idcontinente;
          
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
