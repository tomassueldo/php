<?php 


class Venta {
    private $idventa;
    private $fk_idcliente;
    private $fk_idproducto;
    private $fecha;
    private $cantidad;
    private $preciounitario;
    private $total;

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