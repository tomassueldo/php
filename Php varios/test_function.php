<?php

function sumar($num1, $num2){
    return $num1 + $num2;
}

#echo sumar(20,35);

function concatenar($cadena1, $cadena2){
    return $cadena1 . $cadena2;
}

$resultado = concatenar("Star", " Wars");
#echo $resultado;

function saludar($nombre, $apellido){
    return "Hola" . " " . $nombre . " " . $apellido;
}

$saludo = saludar("Ana", "Perez");
echo $saludo;