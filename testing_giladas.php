<?php

$aClientes = array(
    array("dni" => "3330002", "nombre" => "Ana Valle"),
    array("dni" => "1231232", "nombre" => "Bernabe Valle"),
);

foreach($aClientes as $cliente){
    echo $cliente["nombre"];
    
}