<?php

$valor = rand(1,5); #devuelve aleatorio en el rango especificado

if($valor == 1 || $valor == 3 || $valor == 5){
    echo "El numero es impar";
}
else{
    echo "El numero es par";
}
