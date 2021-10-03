<?php
include_once "config.php";
include_once "entidades/venta.php";


$venta = new Venta();
$aVentas = $venta->cargarGrilla();


include_once "header.php";

?>


<div class="container-fluid"> 
    <h1 class="h3 mb-4 text-gray-800">Listado de ventas</h1>
    <div class="row">
        <a href="venta-formulario.php" class="btn btn-primary my-1">Nuevo</a>
    </div>
    <table class=" table table-hover border">
        <tr>
            <th>Fecha</th>
            <th>Cantidad</th>
            <th>Producto</th>
            <th>Cliente</th>
            <th style="width: 110px;">Total</th>
            <th style="width: 110px;">Acciones</th>
        </tr>
        <?php foreach($aVentas as $venta) : ?>
            <tr>
                <td><?php echo date_format(date_create($venta->fecha),'d/m/Y H:m'); ?></td>
                <td><?php echo $venta->cantidad;  ?></td>
                <td><?php echo $venta->fk_idproducto; ?></td>
                <td><?php echo $venta->fk_idcliente; ?></td>
                <td><?php echo "$" . number_format($venta->total, 2, ",", "."); ?></td>
                <td>
                    <a href="venta-formulario.php?id=<?php echo $venta->idventa ?>"><i class="fas fa-search"></i></a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>

<?php include_once("footer.php");


