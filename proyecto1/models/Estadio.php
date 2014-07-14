<?php

class Estadio extends Modelo{
    public $nombre_tabla = 'estadio';
    public $pk           = 'idestadio';
    
    
    public $atributos = array(
        'Nombre'=>array(),
        'idciudad'=>array(),
    );
    
    public $errores = array( );
    
    private $Nombre;
    private $idestadio;
       
    function Equipo(){
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
        return $this->Nombre;
    } 

    public function set_nombre($valor){

        $er = new Er();
        
        if ( !$er->valida_email($valor) ){
            $this->errores[] = "Este e-mail (".$valor.") no es valido";
        }

        //trim simplemente quita espacios al principio y final
        $this->Nombre = trim($valor);

    }

    public function get_password(){
        return $this->baja;
    }
    
    public function set_password($valor){
        $this->password = trim( md5($valor) );
    }
        
    
}

?>
