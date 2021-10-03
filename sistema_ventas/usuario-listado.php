<?php
include_once "config.php";
include_once "entidades/usuario.php";

$pg = "Listado de usuarios";

$usuario = new Usuario();
$aUsuarios = $usuario->obtenerTodos();

include_once "header.php";
?>

<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Listado de usuarios</h1>
    <div class="row">
        <div class="col-12 mb-3">
            <a href="usuario-formulario.php" class="btn btn-primary">Nuevo</a>
        </div>
    </div>
    <table class="table table-hover border">
        <tr>
            <th>Usuario</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Correo</th>
            <th class="text-right">Acciones</th>
        </tr>
        <?php foreach($aUsuarios as $usuario): ?>
            <tr>
                <td><?php echo $usuario->usuario; ?></td>
                <td><?php echo $usuario->nombre; ?></td>
                <td><?php echo $usuario->apellido; ?></td>
                <td><?php echo $usuario->correo; ?></td>
                <td style="width: 100px;">
                    <a href="usuario-formulario.php?id=<?php echo $usuario->idusuario; ?>"><i class="fas fa-search"></i></a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>


<?php include_once "footer.php";?>