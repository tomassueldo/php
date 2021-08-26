<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function maximo($aNumeros){
    $numMasGrande = 0;
    foreach($aNumeros as $numero){
        if($numero > $numMasGrande){
            $numMasGrande = $numero ;        
        }
    }
    return $numMasGrande;
}   

$aNotas = array(0,8,4,5,3,9,1);
$aSueldo = array(800.30,400.87,500.45,300,900,100,1800);

echo "La nota maxima es: " . maximo($aNotas) . "<br>";
echo "El sueldo maximo es: " . maximo($aSueldo);
