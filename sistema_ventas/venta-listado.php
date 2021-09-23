<?php
include_once("header.php");
?>

<div class="container-fluid"> 
    <h1 class="h3 mb-4 text-gray-800">Listado de ventas</h1>
    <div class="row">
        <a href="venta-formulario.php" class="btn btn-primary my-1">Nuevo</a>
        <table class=" table table-hover border">
            <tr>
                <th>Fecha</th>
                <th>Cantidad</th>
                <th>Producto</th>
                <th>Cliente</th>
                <th class="text-right">Total</th>
                <th class="text-right">Acciones</th>
            </tr>
        </table>
    </div>
</div>

<?php include_once("footer.php");


