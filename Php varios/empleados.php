<?php

$aEmplados = array();
$aEmplados[] = array("dni" => 23232323, "nombre" => "David Garcia", "bruto" => 90203.28);
$aEmplados[] = array("dni" => 47283633, "nombre" => "Lucas Perez", "bruto" => 40250);
$aEmplados[] = array("dni" => 38592738, "nombre" => "Maria Ruiz", "bruto" => 100000);
$aEmplados[] = array("dni" => 18494032, "nombre" => "Jorgelina Rodriguez", "bruto" => 56738.74);

include_once("neto.php");

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empleados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>

<body>
    <main>
        <div class="container">
            <div class="row">
                <div class=" py-5 col-12 text-center">
                    <h1>Lista de empleados</h1>
                </div>
            </div>
            <div class="row">
                <table class="table table-hover border">
                    <tr>
                        <th>DNI</th>
                        <th>Nombre</th>
                        <th>Sueldo</th>
                    </tr>
                    <?php
                    foreach ($aEmplados as $empleado) {
                        echo "<tr>";
                        echo "<td>" . $empleado["dni"] . "</td>";
                        echo "<td>" . strtoupper($empleado["nombre"]) . "</td>";
                        echo "<td>" . "$" . number_format(calcularNeto($empleado["bruto"]), 2, ",", ".") . "</td>";
                        echo "</tr>";
                    }
                    ?>
                </table>
                <p>Cantidad de empleados activos: <?php echo count($aEmplados);?></p>
            </div>
        </div>
    </main>

</body>

</html>