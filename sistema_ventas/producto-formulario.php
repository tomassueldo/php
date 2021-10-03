<?php

include_once "config.php";
include_once "entidades/producto.php";
include_once "entidades/tipoproducto.php";

$pg = "Producto Formulario";

$producto = new Producto();
$producto->cargarFormulario($_REQUEST);

if($_POST){
    if(isset($_POST["btnGuardar"])){
        $nombreImagen = "";
        if($_FILES["imagen"]["error"] === UPLOAD_ERR_OK){
            $nombreRandom = date("Ymdhmsi");
            $archivoTmp = $_FILES["imagen"]["tmp_name"];
            $nombreArchivo = $_FILES["imagen"]["name"];
            $extension = pathinfo($nombreArchivo, PATHINFO_EXTENSION);
            $nombreImagen = "$nombreRandom.$extension";
            move_uploaded_file($archivoTmp, "img/$nombreImagen");
        }

        if(isset($_GET["id"]) && $_GET["id"] > 0) {
            $productoAnt = new Producto();
            $productoAnt->idproducto = $_GET["id"];
            $productoAnt->obtenerPorId();
            $imagenAnt = $productoAnt->imagen;

            //Si es una actualizacion y se sube una imagen, elimina la anterior
            if ($_FILES["imagen"]["error"] === UPLOAD_ERR_OK) {
                if ($imagenAnt != "") {
                    unlink($imagenAnt);
                }
            } else {
                // Si no viene ninguna imagen, setea como imagen la que habia previamente
                $nombreImagen = $imagenAnt;
            }

            $producto->imagen = $nombreImagen;
            //Actualizo cliente
            $producto->actualizar();
        } else{
            //Nuevo
            $producto->imagen = $nombreImagen;
            $producto->insertar();
        }

    } else if(isset($_POST["btnGuardar"])){
        $producto->eliminar();
        header("Location: producto-listado.php");
    } 
}

if(isset($_GET["id"]) && $_GET["id"] > 0){
    $producto->obtenerPorId();
}

$tipoProducto = new TipoProducto();
$aTipoProductos = $tipoProducto->obtenerTodos();


include_once "header.php";


?>

<script src="https://cdn.ckeditor.com/ckeditor5/29.2.0/classic/ckeditor.js"></script>
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Productos</h1>
    <div class="row">
        <div class="col-12 mb-3">
            <a href="producto-listado.php" class="btn btn-primary mr-2">Listado</a>
            <a href="" class="btn btn-primary mr-2">Nuevo</a>
            <button type="submit" class="btn btn-success mr-2" id="btnGuardar" name="btnGuardar">Guardar</button>
            <button type="submit" class="btn btn-danger mr-2" id="btnBorrar" name="btnBorrar">Borrar</button>
        </div>
    </div>
    <div class="row">
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="col-6 form-group">
                <label for="txtNombre">Nombre:</label>
                <input type="text" name="txtNombre" id="txtNombre" class="form-control" value="<?php echo $producto->nombre?>">
            </div>
            <div class="col-6 form-group">
                <label for="txtProducto">Tipo de producto:</label>
                <select name="lstTipoProducto" id="lstTipoProducto" class="form-control">
                    <option value disabled selected>Seleccionar</option>
                    <?php foreach($aTipoProductos as $tipoProducto): ?>
                        <?php if($producto->fk_idtipoproducto == $tipoProducto->idtipoproducto): ?>
                            <option selected value="<?php echo $tipoProducto->idtipoproducto; ?>"><?php echo $tipoProducto->nombre; ?></option>
                        <?php else: ?>
                            <option value="<?php echo $tipoProducto->idtipoproducto; ?>"> <?php echo $tipoProducto->nombre; ?> </option>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="col-6 form-group">
                <label for="txtCantidad">Cantidad:</label>
                <input type="text" name="txtCantidad" id="txtCantidad" class="form-control" value="<?php echo $producto->cantidad?>">
            </div>
            <div class="col-6 form-group">
                <label for="txtPrecio">Precio:</label>
                <input type="text" name="txtPrecio" id="txtPrecio" class="form-control" value="<?php echo $producto->precio?>">
            </div>
            <div class="col-6 form-group">
                <label for="txtDescripcion">Descripcion:</label>
                <textarea type="text" name="txtDescripcion" id="txtDescripcion"><?php echo trim($producto->descripcion); ?></textarea>
            </div>
            <div class="col-12 form-group">
                <label for="txtImagen">Imagen:</label> <br>
                <input type="file" name="imagen" id="imagen" accept=".jpg,.jpeg,.png"> <br>
                <small>Archivos admitidos: .jpg, .jpeg, .png</small>
            </div>
        </form>
    </div>
</div>

<script>
        ClassicEditor
            .create( document.querySelector( '#txtDescripcion' ) )
            .catch( error => {
            console.error( error );
            } );
        </script>

<?php include_once("footer.php"); ?>