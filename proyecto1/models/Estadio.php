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
    private $idciudad;
       
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
    
//Nombre 
    public function get_nombre(){
        return $this->Nombre;
    } 
    public function set_nombre($valor){

        $er = new Er();
        
        if ( !$er->valida_nombre($valor) ){
            $this->errores[] = "Este nombre (".$valor.") no es valido";
        }

        //trim simplemente quita espacios al principio y final
        $this->Nombre = trim($valor);

    }

//idciudad
    public function get_idciudad(){
        return $this->idciudad;
    } 
    public function set_idciudad($valor){
        //objeto de la clase Er
        $er = new Er();

        if ( !$er->valida_numero_entero($valor) ){
            $this->errores[] = 'ID no valido ('.$valor.'). no es un entero';
        }

        //trim simplemente quita espacios al principio y final de la cadena
        $this->idciudad = trim($valor);

    }

   
        
    
}

?>
