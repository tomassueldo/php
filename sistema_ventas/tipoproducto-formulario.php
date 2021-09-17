<?php
include_once("header.php");
?>


<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Tipo de productos</h1>
    <div class="row">
        <div class="col-12 mb-3">
            <a href="tipoproducto-listado.php" class="btn btn-primary mr-2">Listado</a>
            <a href="" class="btn btn-primary mr-2">Nuevo</a>
            <button type="submit" class="btn btn-success mr-2" id="btnGuardar" name="btnGuardar">Guardar</button>
            <button type="submit" class="btn btn-danger mr-2" id="btnBorrar" name="btnBorrar">Borrar</button>
        </div>
    </div>
    <div class="row">
        <div class="col-12 form-group">
            <label for="txtNombre">Nombre:</label>
            <input type="text" required="" class="form-control" id="txtNombre" name="txtNombre">
        </div>
    </div>
</div>

<?php include_once("footer.php"); ?>