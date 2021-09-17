<?php

function contar($aArray) {
    $contador = 0;
    foreach($aArray as $elemento) {
        $contador += 1;
    }
    return $contador;
}




$aPaciente = array("tomas", "lucas", "ernesto",4,6,44);
$aNotas = array(9,8,9,9.50,4,7,8);


echo contar($aPaciente) . "<br>";
echo contar($aNotas);

