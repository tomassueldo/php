<?php

$aPacientes = array();
$aPacientes[] = array(
    "dni" => "33.672.212",
    "nombre" => "Ana Acuña",
    "edad" => 42,
    "peso" => 81.50
);
$aPacientes[] = array(
    "dni" => "12.672.323",
    "nombre" => "Lucas Silveira",
    "edad" => 22,
    "peso" => 78.50
);
$aPacientes[] = array(
    "dni" => "41.483.645",
    "nombre" => "Tomas Martinez",
    "edad" => 20,
    "peso" => 73.23
);
$aPacientes[] = array(
    "dni" => "19.642.234",
    "nombre" => "Ernesto Enrique",
    "edad" => 42,
    "peso" => 90.78
);



?>



<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Clinica</title>
</head>

<body>

    <main>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-left">Listado de pacientes</h1>
                </div>
            </div>
            <div class="row">
                <table class="table table-hover ">
                    <tr>
                        <th>DNI</th>
                        <th>Nombre y apellido</th>
                        <th>Edad</th>
                        <th>Peso</th>
                    </tr>
                    <?php
                    foreach ($aPacientes as $apaciente) {
                        echo "<tr>";
                        echo "<td>" . $apaciente["dni"] . "</td>";
                        echo "<td>" . $apaciente["nombre"] . "</td>";
                        echo "<td>" . $apaciente["edad"] . "</td>";
                        echo "<td>" . $apaciente["peso"] . "</td>";
                        echo "</tr>";
                    }
                    ?>
                </table>
            </div>
        </div>
    </main>






</body>

</html>