<?php 
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
            <?php
            /*
            <input type="text" id="txtFechaVenta" class="form-control" style="width: 170px;">
            */
            ?>
            <select name="lstDia" id="lstDia" class="form-control d-inline" style ="width: 80px">
                <option value disabled selected>DD</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>
                <option>9</option>
                <option>10</option>
                <option>11</option>
                <option>12</option>
                <option>13</option>
                <option>14</option>
                <option>15</option>
                <option>16</option>
                <option>17</option>
                <option>18</option>
                <option>19</option>
                <option>20</option>
                <option>21</option>
                <option>22</option>
                <option>23</option>
                <option>24</option>
                <option>25</option>
                <option>26</option>
                <option>27</option>
                <option>28</option>
                <option>29</option>
                <option>30</option>
                <option>31</option>
            </select>
            <select name="lstMes" id="lstMes" class="form-control d-inline" style="width: 80px;">
                <option value disabled selected>M</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>
                <option>9</option>
                <option>10</option>
                <option>11</option>
                <option>12</option>
            </select>
            <select name="lstAnio" id="lstAnio" class="form-control d-inline" style ="width: 85px">
                <option value disabled selected>YYYY</option>
                <option>2000</option>
                <option>2001</option>
                <option>2002</option>
                <option>2003</option>
                <option>2004</option>
                <option>2005</option>
                <option>2006</option>
                <option>2007</option>
                <option>2008</option>
                <option>2009</option>
                <option>2010</option>
                <option>2011</option>
                <option>2012</option>
                <option>2013</option>
                <option>2014</option>
                <option>2015</option>
                <option>2016</option>
                <option>2017</option>
                <option>2018</option>
                <option>2019</option>
                <option>2020</option>
                <option>2021</option>
            </select>
            <input type="time" name="txtHora" id="txtHora" class="form-control d-inline" style="width: 105px;" value="00:00">
        </div>
    </div>
    <div class="row">
        <div class="col-6 form-group">
            <label for="lstCliente">Cliente:</label>
            <select name="lstCliente" id="lstCliente" class="form-control">
                <option value disabled selected>Seleccionar</option>
            </select>
        </div>
        <div class="col-6 form-group">
            <label for="lstProducto">Producto:</label>
            <select name="lstProducto" id="lstProducto" class="form-control">
                <option value disabled selected>Seleccionar</option>
            </select>
        </div>
        <div class="col-6 form-group">
            <label for="txtPrecio">Precio unitario:</label>
            <input type="text" name="txtPrecio" id="txtPrecio" class="form-control" value="$ 0" disabled>
        </div>
        <div class="col-6 form-group">
            <label for="txtCantidad">Cantidad:</label>
            <input type="text" name="txtCantidad" id="txtCantidad" class="form-control" value="0">
        </div>
        <div class="col-6 form-group">
            <label for="txtTotal">Total:</label>
            <input type="text" name="txtTotal" id="txtTotal" class="form-control" value="0">
        </div>
    </div>
</div>







<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/boostrap/4.3.1/js/bootstrap.min.js"></script>
<script src="js/jquery.datetimepicker.full.min.js"></script>
<script>
    $.datetimepicker.setLocale('es');
    $('#txtFechaVenta').datetimepicker({
        timepicker: true,
        datepicker: true,
        format: 'd-m-Y H:i',
        hours24: true,
        value: 'seleccione',
        yearStart: 2000,
        yearEnd: 2021,
        
    })

</script>



<?php include_once("footer.php");