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

/*
OTRA FORMA
$aProductos[0]["nombre"] = "Smart TV 55\" 4K UHD";
$aProductos[0]["marca"] = "Hitachi";
$aProductos[0]["modelo"] = "554ks20";
$aProductos[0]["stock"] = 60;
$aProductos[0]["precio"] = 5800;

$aProductos[1]["nombre"] = "Samsung Galaxy A30 Blanco";
$aProductos[1]["marca"] = "Samsung";
$aProductos[1]["modelo"] = "Galaxy A30";
$aProductos[1]["stock"] = 0;
$aProductos[1]["precio"] = 22000;

$aProductos[2]["nombre"] = "Aire Acondicionado Split Inverter Frío/Calor Surrey 2900F";
$aProductos[2]["marca"] = "Surrey";
$aProductos[2]["modelo"] = "553AIQ1201E";
$aProductos[2]["stock"] = 5;
$aProductos[2]["precio"] = 45000;

*/  


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
                <tr>
                    <td><?php echo $aProductos[0]["nombre"];?></td>
                    <td><?php echo $aProductos[0]["marca"];?></td>
                    <td><?php echo $aProductos[0]["modelo"];?></td>
                    <td><?php echo $aProductos[0]["stock"] > 10? "Hay stock": ($aProductos[0]["stock"] > 0 && $aProductos[0]["stock"] <= 10? "Poco stock":"No hay stock");?></td>
                    <td><?php echo "$" . $aProductos[0]["precio"];?></td>
                    <td><button class="btn btn-primary">Comprar</button></td>
                </tr>
                <tr>
                    <td><?php echo $aProductos[1]["nombre"];?></td>
                    <td><?php echo $aProductos[1]["marca"];?></td>
                    <td><?php echo $aProductos[1]["modelo"];?></td>
                    <td><?php echo $aProductos[1]["stock"] >10? "Hay stock": ($aProductos[1]["stock"] > 0 && $aProductos[1]["stock"] <= 10? "Poco stock":"No hay stock");?></td>
                    <td><?php echo "$" . $aProductos[1]["precio"];?></td>
                    <td><button class="btn btn-primary">Comprar</button></td>
                </tr>
                <tr>
                    <td><?php echo $aProductos[2]["nombre"];?></td>
                    <td><?php echo $aProductos[2]["marca"];?></td>
                    <td><?php echo $aProductos[2]["modelo"];?></td>
                    <td><?php echo $aProductos[2]["stock"] >10? "Hay stock": ($aProductos[2]["stock"] > 0 && $aProductos[2]["stock"] <= 10? "Poco stock":"No hay stock");?></td>
                    <td><?php echo "$" . $aProductos[2]["precio"];?></td>
                    <td><button class="btn btn-primary">Comprar</button></td>
                </tr>
            </table>
        </div>





    </main>

</body>

</html>