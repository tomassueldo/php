<?php
include_once("header.php");
?>

<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Listado de productos</h1>
    <div class="row">
        <a href="producto-formulario.php" class="btn btn-primary">Nuevo</a>
        <table class="table table-hover border">
            <tr>
                <th>Foto</th>
                <th>Nombre</th>
                <th>Cantidad</th>
                <th>Precio</th>
                <th class="text-right">Acciones</th>
            </tr>
        </table>
    </div>
</div>

<?php include_once("footer.php"); ?>