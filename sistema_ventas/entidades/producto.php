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

    public function cargarFormulario($request){
        $this->idproducto = isset($request["id"]) ? $request["id"] : "";
        $this->nombre = isset($request["txtNombre"]) ? $request["txtNombre"] : "";
        $this->cantidad = isset($request["txtCantidad"]) ? $request["txtCantidad"] : 0;
        $this->precio = isset($request["txtPrecio"]) ? $request["txtPrecio"] : 0;
        $this->descripcion = isset($request["txtDescripcion"]) ? $request["txtDescripcion"] : "";
        $this->fk_idtipoproducto = isset($request["lstTipoProducto"]) ? $request["lstTipoProducto"] : "";
        $this->imagen = isset($request["archivo"]) ? $request["archivo"] : "";
    }

    public function insertar(){
        $mysqli = new mysqli(Config::BBDD_HOST, Config::BBDD_USUARIO, Config::BBDD_CLAVE, Config::BBDD_NOMBRE, Config::BBDD_PORT);
        $sql = "INSERT INTO productos(
                nombre,
                cantidad,
                precio,
                descripcion,
                fk_idtipoproducto,
                imagen)   
                VALUES (
                    '$this->nombre',
                    $this->cantidad,
                    $this->precio,
                    '$this->descripcion',
                    '$this->fk_idtipoproducto',
                    '$this->imagen');";

        if (!$mysqli->query($sql)) {
            printf("Error en query: %s\n", $mysqli->error . " " . $sql);
        }

        //Obtiene el id generado por la insercion
        $this->idproducto = $mysqli->insert_id;
        //Cierra la conexion
        $mysqli->close();
    }

    public function eliminar(){

    }

    public function actualizar(){
        $mysqli = new mysqli(Config::BBDD_HOST, Config::BBDD_USUARIO, Config::BBDD_CLAVE, Config::BBDD_NOMBRE, Config::BBDD_PORT);
        $sql = "UPDATE productos SET
                nombre = '$this->nombre',
                cantidad = $this->cantidad,
                precio = $this->precio,
                descripcion = '$this->descripcion',
                fk_idtipoproducto = '$this->fk_idtipoproducto',
                imagen = '$this->imagen'
                WHERE idproducto = $this->idproducto";
        if (!$mysqli->query($sql)) {
            printf("Error en query: %s\n", $mysqli->error . " " . $sql);
        }
        $mysqli->close();    
    }

    public function obtenerTodos(){
        $mysqli = new mysqli(Config::BBDD_HOST, Config::BBDD_USUARIO, Config::BBDD_CLAVE, Config::BBDD_NOMBRE, Config::BBDD_PORT);
        $sql = "SELECT idproducto,
                        nombre,
                        cantidad,
                        precio,
                        descripcion,
                        fk_idtipoproducto,
                        imagen
                FROM productos";
        if (!$resultado = $mysqli ->query($sql)) {
            printf("Error en query: %s\n", $mysqli->error . " " . $sql);
        }

        $aResultado = array();
        if($resultado){
            //Convierte el resultado en un array asociativo
            while($fila = $resultado->fetch_assoc()){
                $entidadAux = new Producto();
                $entidadAux->idproducto = $fila["idproducto"];
                $entidadAux->nombre = $fila["nombre"];
                $entidadAux->cantidad = $fila["cantidad"];
                $entidadAux->precio = $fila["precio"];
                $entidadAux->descripcion = $fila["descripcion"];
                $entidadAux->fk_idtipoproducto = $fila["fk_idtipoproducto"];
                $entidadAux->imagen = $fila["imagen"];
                $aResultado[] = $entidadAux;
            }
        }
        $mysqli->close();
        return $aResultado;
    }

    public function obtenerPorId(){
        $mysqli = new mysqli(Config::BBDD_HOST, Config::BBDD_USUARIO, Config::BBDD_CLAVE, Config::BBDD_NOMBRE, Config::BBDD_PORT);
        $sql = "SELECT idproducto,
                        nombre,
                        cantidad,
                        precio,
                        descripcion,
                        fk_idtipoproducto,
                        imagen
                FROM productos
                WHERE idproducto = $this->idproducto";

        if (!$resultado = $mysqli->query($sql)){
            printf("Error en query: %s\n", $mysqli->error . " " . $sql);
        }

        if ($fila = $resultado->fetch_assoc()) {
            $this->idproducto = $fila["idproducto"];
            $this->nombre = $fila["nombre"];
            $this->cantidad = $fila["cantidad"];
            $this->precio = $fila["precio"];
            $this->descripcion = $fila["descripcion"];
            $this->fk_idtipoproducto = $fila["fk_idtipoproducto"];
            $this->imagen = $fila["imagen"];
        }
        $mysqli->close();
    }

}


?>