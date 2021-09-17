<?php
ini_set('display_errors',1);
ini_set('display__startup_errors',1);
error_reporting(E_ALL);

date_default_timezone_set('America/Argentina/Buenos_Aires');

$hr = date("h");
$min = date("i");

//Mostrar en pantalla "la hora es 21:10hs
echo "La hora es $hr:$min<br>";

//Sumar 60 minutos e ir informando la hora y minutos en pantalla

for($i=0; $i<60; $i++){
    $min++;
    if($min == 60){
        $min = 0;
        $hr++;
    }if($hr == 24){
        $hr = 0;
    }
    echo "La hora es $hr:$min<br>";
}

//Modificar el ejercicio para que la variable sea $hr 23


//Probar que el ejercicio muestra las 0:10

echo "La hora es $hr:$min<br>";

//Modificar la definicion de la hora para que sea la hora actual
