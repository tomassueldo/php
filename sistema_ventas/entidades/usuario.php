<?php 


class Usuario {
    private $idusuario;
    private $usuario;
    private $clave;
    private $nombre;
    private $apellido;
    private $correo;

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