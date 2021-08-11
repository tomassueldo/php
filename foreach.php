<?php

$miAuto = array(
    "Patente" => "AA123HB",
    "Marca" => "Ford",
);

print_r($miAuto);

foreach($miAuto as $clave => $valor ){
    echo "La $clave es $valor <br>";
}

foreach($miAuto as $valor ){
    echo $valor;
}