<?php
$fecha = date("d/m/Y");
$nombre = "Tomas Federico Sueldo";
$edad = 20;
$aPeliculas = array("Star Wars", "Volver al futuro", "Star Wars");

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ficha personal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <main class="container">
        <div class="row">
            <div class="col-12 text-center py-5">
                <h1>Ficha personal</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table border table-hover">
                    <tr>
                        <th>Fecha:</th>
                        <td><?php echo $fecha; ?></td>
                    </tr>
                    <tr>
                        <th>Nombre y apellido:</th>
                        <td><?php echo $nombre; ?></td>
                    </tr>
                    <tr>
                        <th>Edad:</th>
                        <td><?php echo $edad ?></td>
                    </tr>
                    <tr>
                        <th>Pelciulas favoritas:</th>
                        <td><?php echo $aPeliculas[0]; ?><br>
                            <?php echo $aPeliculas[1]; ?><br>
                            <?php echo $aPeliculas[2]; ?> 
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </main>

</body>

</html>