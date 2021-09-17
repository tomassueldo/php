<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$iva = 0;
$resPrecioSinIva = 0;
$resPrecioConIva = 0;
$resIvaCantidad = 0;


if($_POST){
    //Recupero datos del formulario
    $iva = $_REQUEST["lstIva"];
    $precioConIva = $_REQUEST["txtConIva"];
    $precioSinIva = $_REQUEST["txtSinIva"];

    //Si viene el precio SIN IVA
    if(is_numeric($precioSinIva) > 0 && $precioConIva == ""){
        $resPrecioSinIva = $precioSinIva;
        $resPrecioConIva = $precioSinIva * ($iva/100+1);
        $resIvaCantidad = $resPrecioConIva - $resPrecioSinIva;
    }

    //Si viene el precio CON IVA
    if(is_numeric($precioConIva) > 0 && $precioSinIva == ""){
        $resPrecioConIva = $precioConIva;
        $resPrecioSinIva = $resPrecioConIva / ($iva/100+1);
        $resIvaCantidad = $resPrecioConIva - $resPrecioSinIva;
    }

}   

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Calcular IVA</title>
</head>
<body>


    <main>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center">Calculadora de IVA</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <form method= "POST" action="">
                        <div class="py-2">
                            <label for="">IVA <br>
                            <select name="lstIva">
                                <option value=21>21%</option>
                                <option value=10.5>10.5%</option>
                            </select>
                            </label>
                        </div>
                        <div class="my-2">
                            <label for="">PRECIO SIN IVA: <br>
                                <input type="text" name="txtSinIva" id="txtSinIva" >
                            </label>
                        </div>
                        <div class="my-2">
                            <label for="">PRECIO CON IVA: <br>
                                <input type="text" name="txtConIva" id="txtConIva">
                            </label>
                        </div>
                        <div class="my-2">
                            <button type="submit" class="btn btn-primary"> CALCULAR </button>
                        </div>
                
                    </form>
                </div>
                <div class="col-6">
                    <table class="table table-hover border">
                        <tr>
                            <th>IVA:</th>
                            <td><?php echo $iva ?>%</td>
                        </tr>
                        <tr>
                            <th>Precio sin IVA:</th>
                            <td>$ <?php echo number_format($resPrecioSinIva , 2 , ",", ".");?> </td>
                        </tr>
                        <tr>
                            <th>Precio con IVA:</th>
                            <td>$ <?php echo number_format($resPrecioConIva , 2 , ",", ".");?> </td>
                        </tr>
                        <tr>
                            <th>Iva Cantidad:</th>
                            <td>$ <?php echo number_format($resIvaCantidad , 2 , ",", ".");?> </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </main>
    
</body>
</html>