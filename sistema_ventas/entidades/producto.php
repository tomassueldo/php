<?php 


class Producto {
    private $idproducto;
    private $nombre;
    private $cantidad;
    private $precio;
    private $descripcion;
    private $fk_idtipoproducto;
    private $imagen;

    public function __construct(){

    }

    public function __get($propiedad) {
        return $this->$propiedad;
    }

    public function __set($propiedad, $valor) {
        $this->$propiedad = $valor;
        //return $this;
    }

    public function insertar(){
        
    }

    public function eliminar(){

    }

    public function actualizar(){

    }

    public function obtenerTodos(){

    }

    public function obtenerPorId(){

    }

}


?>