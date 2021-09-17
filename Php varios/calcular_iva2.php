<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);





?>



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular IVA 2</title>
</head>
<body>


    <main>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>Calculadora de IVA</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    IVA: <br>
                    <label for="">
                    <select name="lstIVA" id="lstIVA">
                        <option value="21">21</option>
                        <option value="10.5">10.5</option>
                    </select>
                    </label>
                    <div class="py-2">
                        Sin iva
                        <label for="">
                            <input type="text" name="" id="">
                        </label>
                    </div>

                </div>
            </div>
        </div>
    </main>


    
</body>
</html>