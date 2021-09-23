<?php
include_once("header.php");
?>

<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Usuario</h1>
    <div class="row">
        <div class="col-12 mb-3">
            <a href="usuario-listado.php" class="btn btn-primary mr-2">Listado</a>
            <a href="usuario-formulario2.php" class="btn btn-primary mr-2">Nuevo</a>
            <button type="submit" class="btn btn-success mr-2">Guardar</button>
            <button type="submit" class="btn btn-danger mr-2">Borrar</button>
        </div>
    </div>
    <div class="row">
        <div class="col-6 form-group">
            <label for="txtusuario">Usuario:</label>
            <input type="text" name="txtUsuario" id="txtUsuario" class="form-control">
        </div>
        <div class="col-6 form-group">
            <label for="txt">Nombre:</label>
            <input type="text" name="txtNombre" id="txtNombre" class="form-control">
        </div>
        <div class="col-6 form-group">
            <label for="txtApellido">Apellido:</label>
            <input type="text" name="txtApellido" id="txtApellido" class="form-control">
        </div>
        <div class="col-6 form-group">
            <label for="txtCorreo">Correo:</label>
            <input type="text" name="txtCorreo" id="txtCorreo" class="form-control">
        </div>
    </div>
</div>

<?php include_once("footer.php"); ?>