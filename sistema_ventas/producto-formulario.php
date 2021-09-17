<?php

include_once("header.php");

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
        <div class="col-6 form-group">
            <label for="txtNombre">Nombre:</label>
            <input type="text" name="txtNombre" id="txtNombre" class="form-control">
        </div>
        <div class="col-6 form-group">
            <label for="txtProducto">Tipo de producto:</label>
            <select name="lstTipoProducto" id="lstTipoProducto" class="form-control">
                <option value disabled selected>Seleccionar</option>
            </select>
        </div>
        <div class="col-6 form-group">
            <label for="txtCantidad">Cantidad:</label>
            <input type="text" name="txtCantidad" id="txtCantidad" class="form-control">
        </div>
        <div class="col-6 form-group">
            <label for="txtPrecio">Precio:</label>
            <input type="text" name="txtPrecio" id="txtPrecio" class="form-control">
        </div>
        <div class="col-6 form-group">
            <label for="txtDescripcion">Descripcion:</label>
            <textarea type="text" name="txtDescripcion" id="txtDescripcion"></textarea>
        </div>
        <div class="col-12 form-group">
            <label for="txtImagen">Imagen:</label> <br>
            <input type="file">
        </div>
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