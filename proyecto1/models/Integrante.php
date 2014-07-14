<?php

class Integrante extends Modelo{
    public $nombre_tabla = 'integrante';
    public $pk           = 'idintegrante';
    
    public $atributos = array(
        'nombre'=>array(),
        'apellido'=>array(),
        'peso'=>array(),
        'estatura'=>array(),
        'foto'=>array(),
        'Edad'=>array(),
        'idequipo'=>array(),
    );

    public $errores = array( );
    
    private $nombre;
    private $apellido;
    private $peso;
    private $estatura;
    private $foto;
    private $Edad;
    private $idequipo;

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
    
//nombre
    public function get_nombre(){
        return $this->nombre;
    } 
    public function set_nombre($valor){

        //objeto de la clase Er
        $er = new Er();

        if ( !$er->valida_nombre($valor) ){
            $this->errores[] = 'Nombre no valido ('.$valor.').';
        }

        //trim simplemente quita espacios al principio y final de la cadena
        $this->nombre = trim($valor);
    }

//apellido
    public function get_apellido(){
        return $this->apellido;
    } 
    public function set_apellido($valor){

        //objeto de la clase Er
        $er = new Er();

        if ( !$er->valida_nombre($valor) ){
            $this->errores[] = 'Apellido no valido ('.$valor.').';
        }

        //trim simplemente quita espacios al principio y final de la cadena
        $this->apellido = trim($valor);
    }
    
//peso
    public function get_peso(){
        return $this->peso;
    } 
    public function set_peso($valor){

        //objeto de la clase Er
        $er = new Er();

        if ( !$er->valida_estatura($valor) ){
            $this->errores[] = 'Este fomato de peso ('.$valor.'). No es valido';
        }

        //trim simplemente quita espacios al principio y final de la cadena
        $this->peso = trim($valor);
    }

//estatura
    public function get_estatura(){
        return $this->estatura;
    } 
    public function set_estatura($valor){

        //objeto de la clase Er
        $er = new Er();

        if ( !$er->valida_estatura($valor) ){
            $this->errores[] = 'Este formato de estatura ('.$valor.'). No es valido';
        }

        //trim simplemente quita espacios al principio y final de la cadena
        $this->estatura = trim($valor);
    }

//foto
    public function get_foto(){
        return $this->foto;
    } 
    public function set_foto($valor){

        //objeto de la clase Er
        $er = new Er();

        if ( !$er->valida_imagen($valor) ){
            $this->errores[] = 'Este formato de imagen ('.$valor.'). No es valido';
        }

        //trim simplemente quita espacios al principio y final de la cadena
        $this->foto = trim($valor);
    }

//Edad
    public function get_edad(){
        return $this->Edad;
    } 
    public function set_edad($valor){

        //objeto de la clase Er
        $er = new Er();

        if ( !$er->valida_numero_entero($valor) ){
            $this->errores[] = 'Este formatod de edad ('.$valor.'). No es valido';
        }

        //trim simplemente quita espacios al principio y final de la cadena
        $this->edad = trim($valor);
    }

//idequipo
    public function get_idequipo(){
        return $this->idequipo;
    } 
    public function set_idequipo($valor){

        //objeto de la clase Er
        $er = new Er();

        if ( !$er->valida_numero_entero($valor) ){
            $this->errores[] = 'Este id ('.$valor.'). No es valido';
        }

        //trim simplemente quita espacios al principio y final de la cadena
        $this->idequipo = trim($valor);
    }
           
}
?>
