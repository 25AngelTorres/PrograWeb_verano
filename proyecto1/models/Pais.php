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
          
    function Pais(){
        parent::Modelo();
    }
    
    public function get_atributos(){
        $rs = array();
        foreach ($this->atributos as $key => $value) {
            $rs[$key]=$this->$key;
        }
        return $rs;
    }
    
//nombre 
    public function get_nombre(){
        return $this->nombre;
    } 
    public function set_nombre($valor){

        $er = new Er();
        
        if ( !$er->valida_nombre($valor) ){
            $this->errores[] = "Este nombre (".$valor.") no es valido";
        }

        //trim simplemente quita espacios al principio y final
        $this->nombre = trim($valor);

    }

//idcontinente
    public function get_idcontinente(){
        return $this->idcontinente;
    } 
    public function set_idcontinente($valor){

        $er = new Er();
        
        if ( !$er->valida_numero_entero($valor) ){
            $this->errores[] = "Este id (".$valor.") no es valido";
        }

        //trim simplemente quita espacios al principio y final
        $this->idcontinente = trim($valor);

    }

//bandera
    public function get_bandera(){
        return $this->bandera;
    } 
    public function set_bandera($valor){

        $er = new Er();
        
        if ( !$er->valida_imagen($valor) ){
            $this->errores[] = "Esta imagen (".$valor.") no es valida. Formato no valido";
        }

        //trim simplemente quita espacios al principio y final
        $this->bandera = trim($valor);

    }

    
}

?>
