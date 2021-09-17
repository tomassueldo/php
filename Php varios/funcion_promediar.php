<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function promediar($aNumeros){
    $cant_notas = count($aNumeros);
    $suma_notas = 0;
    foreach($aNumeros as $aNumero){
        $suma_notas += $aNumero;
    }
    return $suma_notas / $cant_notas;
}
