<?php

use function PHPSTORM_META\exitPoint;

include_once "config.php";
include_once "entidades/venta.php";
include_once "entidades/cliente.php";
include_once "entidades/producto.php";




$pg = "Venta Formulario";

$venta = new Venta();
$venta->cargarFormulario($_REQUEST);

if($_POST){
    if(isset($_POST["btnGuardar"])){
        if(isset($_GET["id"]) && $_GET["id"] > 0){
            //Actualizo venta
            $venta->actualizar();
        } else {
            //Nueva venta
            $venta->insertar();
        }
    } else if(isset($_POST["btnBorrar"])){
        $venta->eliminar();
        header("Location: venta-listado.php");
    }
}

if(isset($_GET["id"]) && $_GET["id"] > 0){
    $venta->obtenerPorId();
}

if(isset($_GET["do"]) && $_GET["do"] == "buscarProducto"){
    $aResultado = array();
    $idProducto = $_GET["id"];
    $producto = new Producto();
    $producto->idproducto = $idProducto;
    $producto->obtenerPorId();
    $aResultado["precio"] = $producto->precio;
    $aResultado["cantidad"] = $producto->cantidad;
    echo json_encode($aResultado);
    exit();
}




$cliente = new Cliente();
$aClientes = $cliente->obtenerTodos();

$producto = new Producto();
$aProductos = $producto->obtenerTodos();



include_once("header.php"); 




?>

<link rel="stylesheet" href="css/jquery.datetimepicker.min.css">

<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Venta</h1>
    <div class="row">
        <div class="col-12 mb-3">
        <a href="venta-listado.php" class="btn btn-primary mr-2">Listado</a>
        <a href="venta-formulario.php" class="btn btn-primary mr-2">Nuevo</a>
        <button type="submit" class="btn btn-success mr-2" id="btnGuardar" name="btnGuardar">Guardar</button>
        <button type="submit" class="btn btn-danger mr-2" id="btnBorrar" name="btnBorrar">Borrar</button>
        </div>
    </div>
    <div class="row">
        <div class="col-12 form-group">
            <label for="txtFechaVenta" class="d-block">Fecha y hora</label>
            <select name="lstDia" id="lstDia" class="form-control d-inline" style ="width: 80px">
                <option disabled selected>DD</option>
                <?php for($i = 1; $i < 32; $i++): ?>
                    <?php if($venta->fecha != "" && $i == date_format(date_create($venta->fecha), "d")): ?>
                        <option selected><?php echo $i; ?></option>
                    <?php else: ?>
                        <option><?php echo $i; ?></option>
                    <?php endif; ?>
                <?php endfor; ?>
            </select>
            <select name="lstMes" id="lstMes" class="form-control d-inline" style="width: 80px;">
                <option disabled selected>M</option>
                <?php for($i = 1; $i < 13; $i++): ?>
                    <?php if($venta->fecha != "" && $i == date_format(date_create($venta->fecha), "m")): ?>
                        <option selected><?php echo $i; ?></option>
                    <?php else: ?>
                        <option><?php echo $i; ?></option>
                    <?php endif; ?>
                <?php endfor; ?>
            </select>
            <select name="lstAnio" id="lstAnio" class="form-control d-inline" style ="width: 85px">
                <option disabled selected>YYYY</option>
                <?php for($i = 1904; $i <= date("Y"); $i++): ?>
                    <?php if($venta->fecha != "" && $i == date_format(date_create($venta->fecha), "Y")): ?>
                        <option selected><?php echo $i; ?></option>
                    <?php else: ?>
                        <option><?php echo $i; ?></option>
                    <?php endif; ?>
                <?php endfor; ?>
            </select>

            <?php if($venta->fecha == ""): ?>
                <input type="time" required="" class="form-control d-inline" style="width: 120px" name="txtHora" id="txtHora" value="00:00">
            <?php else: ?>
                <input type="time" required="" class="form-control d-inline" style="width: 120px" name="txtHora" id="txtHora" value="<?php echo date_format(date_create($venta->fecha), "H:m"); ?>">
            <?php endif; ?>
        </div>
    </div>


    <div class="row">
        <div class="col-6 form-group">
            <label for="lstCliente">Cliente:</label>
            <select name="lstCliente" id="lstCliente" class="form-control">
                <option value disabled selected>Seleccionar</option>
                <?php foreach($aClientes as $cliente): ?>
                    <?php if($venta->fk_idcliente == $cliente->idcliente): ?>
                        <option selected value="<?php echo $cliente->idcliente; ?>"><?php echo $cliente->nombre; ?></option>
                    <?php else: ?>
                        <option value="<?php echo $cliente->idcliente; ?>"><?php echo $cliente->nombre; ?></option>
                    <?php endif; ?>
                <?php endforeach; ?> 
            </select>
        </div>
        <div class="col-6 form-group">
            <label for="lstProducto">Producto:</label>
            <select name="lstProducto" id="lstProducto" class="form-control" onchange="fBuscarPrecio();">
                <option value disabled selected>Seleccionar</option>
                <?php foreach($aProductos as $producto): ?>
                    <?php if($venta->fk_idproducto == $producto->idproducto): ?>
                        <option selected value="<?php echo $producto->idproducto; ?>"><?php echo $producto->nombre; ?></option>
                    <?php else: ?>
                        <option value="<?php echo $producto->idproducto; ?>"><?php echo $producto->nombre; ?></option>
                    <?php endif; ?>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="col-6 form-group">
            <label for="txtPrecio">Precio unitario:</label>
            <input type="text" name="txtPrecio" id="txtPrecioUniCurrency" class="form-control" value="$ <?php echo $venta->preciounitario; ?>" disabled>
            <input type="hidden" name="txtPrecioUni" id="txtPrecioUni" class="form-control" value="<?php echo $venta->preciounitario; ?>">
        </div>
        <div class="col-6 form-group">
            <label for="txtCantidad">Cantidad:</label>
            <input type="text" name="txtCantidad" id="txtCantidad" class="form-control" value="<?php echo $venta->cantidad; ?>" onchange="fCalcularTotal();">
            <span id="msgStock" class="text-danger" style="display:none;">No hay stock suficiente</span>
        </div>
        <div class="col-6 form-group">
            <label for="txtTotal">Total:</label>
            <input type="text" name="txtTotal" id="txtTotal" class="form-control" value="$ <?php echo $venta->total; ?>">
        </div>
    </div>
</div>

<script>
    function fBuscarPrecio(){
        let idProducto = $("#lstProducto option:selected").val();
        $.ajax({
            type: "GET",
            url: "venta-formulario.php?do=buscarProducto",
            data: { id:idProducto},
            async: true,
            dataType: "json",
            success: function (respuesta) {
                strResultado = Intl.NumberFormat("es-AR", {style: 'currency', currency: 'ARS'}).format(respuesta.precio);
                $("#txtPrecioUniCurrency").val(strResultado);
                $("#txtPrecioUni").val(respuesta.precio);
            }
        })
    }


    function fCalcularTotal(){
        let idProducto = $("#lstProducto option:selected").val();
        let cantidad = parseFloat($("#txtCantidad").val());
        let precioUnitario = parseInt($("#txtPrecioUni").val());
        resultado = cantidad * precioUnitario;

        //Lamada ajax
        $.ajax({
            type: "GET",
            url: "venta-formulario.php?do=buscarProducto",
            data: { id:idProducto},
            async: true,
            dataType: "json",
            success: function (respuesta) {
                if(cantidad > respuesta.cantidad){
                    $("#msgStock").show();
                }else{
                    $("#msgStock").hide();
                    strResultado = Intl.NumberFormat("es-AR", {style: 'currency', currency: 'ARS'}).format(resultado);
                    $("#txtTotal").val(strResultado);
                }
            }
        })
    }

    /*

    
    function fCalcularTotal(){
    var idProducto = $("#lstProducto option:selected").val();
    var precio = parseFloat($('#txtPrecioUni').val());
    var cantidad = parseInt($('#txtCantidad').val());

     $.ajax({
        type: "GET",
        url: "venta-formulario.php?do=buscarProducto",
        data: { id:idProducto },
        async: true,
        dataType: "json",
        success: function (respuesta) {
            let resultado = 0;
            if(cantidad <= parseInt(respuesta.cantidad)){
                resultado = precio * cantidad;
                 $("#msgStock").hide();
            } else {
                $("#msgStock").show();
            }
            strResultado = Intl.NumberFormat("es-AR", {style: 'currency', currency: 'ARS'}).format(resultado);
            $("#txtTotal").val(strResultado);
        }
    });  

    */
</script>







<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/boostrap/4.3.1/js/bootstrap.min.js"></script>
<script src="js/jquery.datetimepicker.full.min.js"></script>




<?php include_once("footer.php");