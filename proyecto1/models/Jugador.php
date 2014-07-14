<?php

class Jugador extends Modelo{
    public $nombre_tabla = 'jugador';
    public $pk           = 'idjugador';
    
    public $atributos = array(
        'numero'=>array(),
        'idposision'=>array(),
        'idintegrante'=>array(),
    );

    public $errores = array( );
    
    private $numero;
    private $idintegrante;
    private $idposision;

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
    
//numero
    public function get_numero(){
        return $this->numero;
    } 
    public function set_numero($valor){

        //objeto de la clase Er
        $er = new Er();

        if ( !$er->valida_numero_entero($valor) ){
            $this->errores[] = 'Este numero ('.$valor.'). No es valido';
        }

        //trim simplemente quita espacios al principio y final de la cadena
        $this->numero = trim($valor);
    }

//idposision
    public function get_idposision(){
        return $this->idposision;
    } 
    public function set_idposision($valor){

        //objeto de la clase Er
        $er = new Er();

        if ( !$er->valida_numero_entero($valor) ){
            $this->errores[] = 'Id no valido ('.$valor.').';
        }

        //trim simplemente quita espacios al principio y final de la cadena
        $this->idposision = trim($valor);
    }

//idintegrante
    public function get_idintegrante(){
        return $this->idintegrante;
    } 
    public function set_idintegrante($valor){

        //objeto de la clase Er
        $er = new Er();

        if ( !$er->valida_numero_entero($valor) ){
            $this->errores[] = 'Este id ('.$valor.'). No es valido';
        }

        //trim simplemente quita espacios al principio y final de la cadena
        $this->idintegrante = trim($valor);
    }
           
}

?>
