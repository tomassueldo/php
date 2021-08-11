<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


</head>
<body>
    <main class="container">
        <div class="row">
            <div class="col-12 py-5">
                <h1>Lista de precios</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-hover border">
                    <thead> <!--encabezado-->
                    <tr> <!--fila-->
                        <th>Producto</th>  <!--columna importante-->
                        <th>Cantidad</th>
                        <th>Importe</th>
                    </tr>
                    </thead>
                    <tbody>   <!--cuerpo-->
                    <tr>
                        <td>Samsung Galaxy A32 128 GB awesome blue 4 GB RAM</td> <!--columna normal-->
                        <td>19</td>
                        <td>$43.177</td>
                    </tr>
                    <tr>
                        <td>Samsung Galaxy S20 FE 128 GB cloud red 6 GB RAM</td>
                        <td>25</td>
                        <td>$84.999</td>
                    </tr>
                    <tr>
                        <td>Samsung Galaxy S21+ 5G 128 GB phantom silver 8 GB RAM</td>
                        <td>30</td>
                        <td>$154.999</td>
                    </tr>
                    <tr>
                        <td>Samsung Galaxy S21 Ultra 5G 256 GB phantom silver 12 GB RAM</td>
                        <td>10</td>
                        <td>$199.999</td>
                    </tr>
                    <tr>
                        <td colspan="2">TOTAL:</td> <!--COLSPAN CORRE COLUMNAS-->
                        <td>$9.595.298</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>


    
    </main>

    
</body>
</html>