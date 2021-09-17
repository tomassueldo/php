<?php 


class TipoProducto {
    private $idtipoproducto;
    private $nombre;

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