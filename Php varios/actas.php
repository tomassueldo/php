<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$aAlumnos = array();
$aAlumnos[] = array("id" => 1, "nombre" => "Juan Perez", "nota1" => 9, "nota2" => 8);
$aAlumnos[] = array("id" => 2, "nombre" => "Ana Valle", "nota1" => 4, "nota2" => 9);
$aAlumnos[] = array("id" => 3, "nombre" => "Gonzalo Roldan", "nota1" => 7, "nota2" => 6);


//Promedio de la cursada
$notasFinales = 0;
$cantAlumnos = 0;

foreach($aAlumnos as $alumno){
    $cantAlumnos += 1;
    $notasFinales += ($alumno["nota1"] + $alumno["nota2"]) / 2;
    $promedioCursada = $notasFinales / $cantAlumnos;
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    </head>
<body>

    <main>
        <div class="container">
            <div class="row">
                <div class="col-12 text-center py-2">
                    <h1>Actas</h1>
                </div>
            </div>
            <div class="row">
                <table class="table table-hover border">
                    <tr>
                        <th>ID</th>
                        <th>Alumno</th>
                        <th>Nota 1</th>
                        <th>Nota 2</th>
                        <th>Promedio</th>
                    </tr>
                    <?php foreach($aAlumnos as $alumno):?>
                        <tr> 
                        <td> <?php echo $alumno["id"]?> </td>
                        <td> <?php echo $alumno["nombre"]?> </td>
                        <td> <?php echo $alumno["nota1"]?> </td>
                        <td> <?php echo $alumno["nota2"]?> </td>
                        <td> <?php echo (($alumno["nota1"] + $alumno["nota2"]) / 2)?> </td>
                        </tr>
                    <?php endforeach; ?>  
                </table>
                <h2>Promedio de la cursada: <?php echo number_format($promedioCursada, 2, ".") ?></h2>
            </div>
        </div>
    </main>

    
</body>
</html>