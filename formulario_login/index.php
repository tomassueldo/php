<?php
if($_POST){
    $usuario = $_REQUEST["txtUsuario"];
    $clave = $_REQUEST["txtClave"];
    if($usuario != "" && $clave != "") {
        header("Location: acceso_confirmado.php");
    }   else{
            $msg = "Valido para usuarios registrados";
    }
}


?>




<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

</head>
<body>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-12 my-3">
                    <h1>Formulario</h1>
                </div>
            </div>
            <div class="row">
                <?php if(isset($msg) && $msg != ""){?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $msg ?>
                    </div>
                <?php } ?>

                <form action="" method="POST">
                    <div class="py-2">
                        Usuario: <br>
                        <input type="text" name="txtUsuario" id="txtUsuario">
                    </div>
                    <div class="py-2">
                        Clave: <br>
                        <input type="password" name="txtClave" id="txtClave">
                    </div>
                    <div>
                        <button type="submit" name="btnIngreso" id="btnIngreso" class="btn btn-primary">Ingresar</button>
                    </div>
                </form>
            </div>
        </div>

    </main>
    
</body>
</html>