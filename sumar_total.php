<?php

$aProductos = array();
$aProductos[] = array(
    "nombre" => "Smart TV 55\" 4K UHD",
    "marca" => "Hitachi",
    "modelo" => "554KS20",
    "stock" => 60,
    "precio" => 58000,
);
$aProductos[] = array(
    "nombre" => "Samsung Galaxy A30 Blanco",
    "marca" => "Samsung",
    "modelo" => "Galaxy A30",
    "stock" => 0,
    "precio" => 22000,
);
$aProductos[] = array(
    "nombre" => "Aire Acondicionado Split Inverter Frío/Calor Surrey 2900F",
    "marca" => "Surrey",
    "modelo" => "553AIQ1201E",
    "stock" => 5,
    "precio" => 45000,
);
$aProductos[] = array(
    "nombre" => "Impresora HP Laser",
    "marca" => "HP",
    "modelo" => "P1102",
    "stock" => 5,
    "precio" => 20000,
);

$subtotal = 0;


?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">}

</head>

<body>

    <main class="container">
        <div class="row">
            <div class="col-12 py-5 text-center">
                <h1>Listado de productos</h1>
            </div>
        </div>
        <div class="row">
            <table class="table table-hover border">
                <tr>
                    <th>Nombre</th>
                    <th>Marca</th>
                    <Th>Modelo</Th>
                    <th>Stock</th>
                    <th>Precio</th>
                    <th>Accion</th>
                </tr>
                    <?php
                        for($i = 0; $i < count($aProductos); $i++){
                            echo "<tr>";
                            echo "<td>" . $aProductos[$i]["nombre"] . "</td>";
                            echo "<td>" . $aProductos[$i]["marca"] . "</td>";
                            echo "<td>" . $aProductos[$i]["modelo"] . "</td>";
                            echo "<td>" . ($aProductos[$i]["stock"] > 10? "Hay stock": ($aProductos[$i]["stock"] > 0 && $aProductos[$i]["stock"] <= 10? "Poco stock":"No hay stock")) . "</td>";
                            echo "<td>" . "$" . $aProductos[$i]["precio"] . "</td>";
                            echo "<td><button class='btn btn-primary'>Comprar</button></td>";
                            echo "</tr>";
                            $subtotal += $aProductos[$i]["precio"];
                        }
                        ?>
            </table>
            <div class="col-12">
                <h2>El subtotal es:<?php echo " $" . $subtotal?></h2>
            </div>
        </div>





    </main>

</body>

</html>