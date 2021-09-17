<?php
ini_set('display_errors',1);
ini_set('display__startup_errors',1);
error_reporting(E_ALL);


class Cliente{
    private $dni;
    private $nombre;
    private $correo;
    private $telefono;
    
    public function __get($propiedad) {
        return $this->$propiedad;
    }

    public function __set($propiedad, $valor) {
        $this->$propiedad = $valor;
    }

    public function __construct()
    {   
        $this->descuento = 0.0;
    }

    function imprimir(){
        echo "Dni: " . $this->dni . "<br>";
        echo "Nombre: " . $this->nombre . "<br>";
        echo "Correo: " . $this->correo . "<br>";
        echo "Telefono: " . $this->telefono . "<br>";
        echo "Descuento: " . $this->descuento . "<br><br>";
    }
}


class Producto{
    private $cod;
    private $nombre;
    private $descripcion;
    private $precio;
    private $iva;

    public function __construct()
    {
        $this->precio = 0.0;
        $this->iva = 0.0;
    }

    public function __get($propiedad)
    {
        return $this->$propiedad;
    }
    
    public function __set($propiedad, $valor) {
        $this->$propiedad = $valor;
    }

    function imprimir(){
        echo "Codigo: " . $this->cod . "<br>";
        echo "Nombre: " . $this->nombre . "<br>";
        echo "Descripcion: " . $this->descripcion . "<br>";
        echo "Precio: " . $this->precio . "<br>";
        echo "IVA: " . $this->iva . "<br><br>";
    }
}

class Carrito{
    private $cliente;
    private $aProductos;
    private $subtotal;
    private $total;

    public function __get($propiedad)
    {
        return $this->$propiedad;
    }
    
    public function __set($propiedad, $valor) {
        $this->$propiedad = $valor;
    }
    
    public function __construct()
    {
        $this->aProductos = array();
        $this->subtotal = 0.0;
        $this->total = 0.0;
    }

    function cargarProducto($producto){
        array_push($this->aProductos, $producto);
        // $this->aProductos[] = $producto es lo mismo
    }


    function imprimirTicket(){
        echo "<table class='table table-hover border' style='width:400px'>";
        echo "<tr><th colspan='2' class = text-center>" . 'EcoMarket' . "</th></tr>";
        echo "<tr>";
        echo "<th>" . "Fecha" . "</th>";
        echo "<td>" . date("d/m/Y") . "</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<th>" . "DNI" . "</th>";
        echo "<td>" . $this->cliente->dni . "</td>";
        echo "</tr>";
        echo "<th>" . "Nombre" . "</th>";
        echo "<td>" . $this->cliente->nombre . "</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<th colspan='2'>" . "Productos:" . "</th>";
        echo "</tr>";
        foreach($this->aProductos as $producto){
            echo "<tr>";
            echo "<td>" . $producto->nombre . "</td>";
            echo "<td>" . "$ " . number_format($producto->precio, 2, ",", ".") . "</td>";
            echo "</tr>";
            $this->subtotal += $producto->precio;
            $this->total += $producto->precio * (($producto->iva / 100)+1);
        }
        echo "<tr>";
        echo "<th>" . "Subtotal s/IVA:" . "</th>";
        echo "<td>" . "$ " . number_format($this->subtotal,2,",",".") . "</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<th>" . "TOTAL:" . "</th>";
        echo "<td>" . "$ " . number_format($this->total,2,",",".") . "</td>";
        echo "</tr>";
        echo "</table>";
    }   
}


$cliente1 = new Cliente();
$cliente1->dni = "34765456";
$cliente1->nombre = "Bernabé";
$cliente1->correo = "bernabe@gmail.com";
$cliente1->telefono = "+541146473829";
$cliente1->descuento = 0.05;
//$cliente1->imprimir();
//print_r($cliente1);

$producto1 = new Producto();
$producto1->cod = "AB8767";
$producto1->nombre = "Notebook 15\" HP";
$producto1->descripcion = "Esta es una computadora HP";
$producto1->precio = 30800;
$producto1->iva = 21;
//$producto1->imprimir();

$producto2 = new Producto();
$producto2->cod = "QWR579";
$producto2->nombre = "Heladera Whirlpool";
$producto2->descripcion = "Esta es una heladera no froze";
$producto2->precio = 76000;
$producto2->iva = 10.5;
//$producto2->imprimir();



$carrito = new Carrito();
$carrito->cliente = $cliente1;
$carrito->cargarProducto($producto1);
$carrito->cargarProducto($producto2);
//print_r($carrito);


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>
    <main class="container">
        <div class="row">
            <div class="col-12">
                <?php echo $carrito->imprimirTicket(); ?>
            </div>
        </div>
    </main>
    
</body>
</html>