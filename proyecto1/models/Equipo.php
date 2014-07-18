<?php

class Equipo extends Modelo{
    public $nombre_tabla = 'equipo';
    public $pk           = 'idequipo';
    
    public $atributos = array(
        'nombre'=>array(),
        'idpais'=>array(),
        'escudo'=>array(),
    );

    public $errores = array( );
    
    private $nombre;
    private $idpais;
    private $escudo;
       

//Instancia del objeto modelo para implementar la conexion con la base de datos
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

    public function get_idpais(){
        return $this->idpais;
    } 

    public function set_idpais($valor){
        //objeto de la clase Er
        $er = new Er();

        if ( !$er->valida_numero_entero($valor) ){
            $this->errores[] = 'ID no valido ('.$valor.'). no es un entero';
        }

        //trim simplemente quita espacios al principio y final de la cadena
        $this->idpais = trim($valor);

    }
    

   public function get_escudo(){
        return $this->escudo;
    } 

    public function set_escudo($valor){
        //objeto de la clase Er
        $er = new Er();

        if ( !$er->valida_imagen_name($valor['name']) ){
            $this->errores[] = 'Imagen no valida ('.$valor["name"].'). Formato no aceptado, solo imagenes .gif, .png, jpeg o .jpg';
        }
        if ( !$er->valida_imagen_type($valor['type']) ){
            $this->errores[] = 'formato no valido ('.$valor["type"].').';
        }
        if ( $valor['size']>5000000){
            $this->errores[] = 'Tamaño de imagen ('.$valor["size"].'). Sobrepasa el tamaño maximo';
        }
        //trim simplemente quita espacios al principio y final de la cadena
        $this->escudo = trim($valor['name']);

    }
    
           
}

?>
