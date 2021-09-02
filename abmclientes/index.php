<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


if (file_exists("archivo.txt")) {
    //Leer el archivo y alamcenar su contenido json en $jSonClientes
    $jSonClientes = file_get_contents("archivo.txt");

    //Converter el json en array $aClientes
    $aClientes = json_decode($jSonClientes, true);
} else {
    $aClientes = array();
}

$id = isset($_REQUEST["id"]) ? $_REQUEST["id"] : "";



//Preguntar los datos si fueron
if ($_POST) {
    //Capturo los datos que ponen en variable
    $dni = trim($_REQUEST["txtDni"]);                                       #trim elimina espacios laterales
    $nombre = trim($_REQUEST["txtNombre"]);
    $telefono = trim($_REQUEST["txtTelefono"]);
    $correo = trim($_REQUEST["txtCorreo"]);
    $imagen = "";

    if ($_FILES["archivo"]["error"] === UPLOAD_ERR_OK) {
        $nombreAleatorio = date("Ymdhmsi");
        $archivo_tmp = $_FILES["archivo"]["tmp_name"];
        $nombreArchivo = $_FILES["archivo"]["name"];
        $extension = pathinfo($nombreArchivo, PATHINFO_EXTENSION);
        $imagen = "$nombreAleatorio.$extension";
        move_uploaded_file($archivo_tmp, "imagenes/$imagen");
    }


    if ($id != "") {
        //Al editar el archivo no cambia la imagen
        if ($_FILES["archivo"]["error"] !== UPLOAD_ERR_OK) {
            $imagen = $aClientes[$id]["archivo"];
        } else {
            //Si esta subiendo una nueve imagen debe eliminar la anterior
            unlink("imagenes/" . $aClientes[$id]["archivo"]);
        }

        //Actualizar cliente
        $aClientes[$id] = array(
            "dni" => $dni,
            "nombre" => $nombre,
            "telefono" => $telefono,
            "correo" => $correo,
            "archivo" => $imagen
        );
    } else {
        //Insertar nuevo cliente
        $aClientes[] = array(
            "dni" => $dni,
            "nombre" => $nombre,
            "telefono" => $telefono,
            "correo" => $correo,
            "archivo" => $imagen
        );
    }
    //Convertir el array a json y almacenaron en una variable $jSonClientes
    $jSonClientes = json_encode($aClientes);

    //Almacenar el contenido de la variable json en el archivo .txt
    file_put_contents("archivo.txt", $jSonClientes);

    header("Location: index.php");
}

if ($id != "" && isset($_REQUEST["do"]) && $_REQUEST["do"] == "eliminar") {
    unset($aClientes[$id]);
    $jSonClientes = json_encode($aClientes);
    file_put_contents("archivo.txt", $jSonClientes);
    header("Location: index.php");
}







?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABM Clientes</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">}

</head>

<body>

    <main class="container">
        <div class="row">
            <div class="col-12 py-3 text-center">
                <h1>Registro de clientes</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-6 py-3">
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="col-12 form-group">
                        <div class="col-12 my-2">
                            <label for="txtDni">DNI:* </label>
                            <input type="text" id="txtDni" name="txtDni" class="form-control" required value="<?php echo isset($aClientes[$id]["dni"]) ? $aClientes[$id]["dni"] : ""; ?>">
                        </div>
                        <div class="col-12 my-2">
                            <label for="txtNombre">Nombre:* </label>
                            <input type="text" id="txtNombre" name="txtNombre" class="form-control" required value="<?php echo isset($aClientes[$id]["nombre"]) ? $aClientes[$id]["nombre"] : ""; ?>">
                        </div>
                        <div class="col-12 my-2">
                            <label for="txtTelefono">Telefono:* </label>
                            <input type="text" id="txtTelefono" name="txtTelefono" class="form-control" required value="<?php echo isset($aClientes[$id]["telefono"]) ? $aClientes[$id]["telefono"] : ""; ?>">
                        </div>
                        <div class="col-12 my-2">
                            <label for="txtCorreo">Correo:* </label>
                            <input type="text" id="txtCorreo" name="txtCorreo" class="form-control" required value="<?php echo isset($aClientes[$id]["correo"]) ? $aClientes[$id]["correo"] : ""; ?>">
                        </div>
                        <div class="col-12 my-2">
                            <label for="archivo1">Archivo adjunto:</label>
                            <input type="file" name="archivo" id="archivo" accept=".jpg,.jpeg,.png">
                            <p>Archivos admitidos: .jpg, .jpeg, .png</p>
                        </div>
                        <div class="col-12 my-2">
                            <button class="btn btn-primary" type="submit" name="btnGuardar" id="btnGuardar">Guardar</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-6 py-4">
                <table class="table table-hover border">
                    <tr>
                        <th>Imagen</th>
                        <th>DNI</th>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>Acciones</th>
                    </tr>

                    <?php foreach ($aClientes as $pos => $cliente) : ?>
                        <tr>
                            <td><img src="imagenes/<?php echo $cliente["archivo"] ?>" class="img-thumbnail"></td>
                            <td> <?php echo $cliente["dni"] ?> </td>
                            <td> <?php echo $cliente["nombre"] ?> </td>
                            <td> <?php echo $cliente["correo"] ?> </td>
                            <td style="width: 110px;">
                                <a href="<?php echo "?id=$pos"; ?>"><i class="fas fa-edit"></i></a>
                                <a href="<?php echo "?id=$pos&do=eliminar"; ?>"><i class="fas fa-trash-alt"></i></a>
                            </td>

                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
        <a href="index.php"><i class="fas fa-plus-circle"></i></a>
    </main>
</body>

</html>