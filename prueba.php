<?php
// asi se comenta una sola linea

/* aca comentamos
varias
lineas
*/

/*
echo "Hola Mundo <br>"; 
echo date("d/m/Y");
$nombre = "Juan";
$apellido = "Perez";
$casado = false;
$edad = 35;
echo $nombre;
print_r($apellido);
*/

$miArray = array();
$miArray[0] = "Hola";
$miArray[37] = "Chau";
$miArray[] = "Adios";
$miArray[] = "Buenas tardes";
$miArray[1] = "hello";
$miArray[] = "Buenas noches";
print_r($miArray);





#Arrays dentro de arrays (matrices)

$miArray = array();
$miArray[0] = array();
$miArray[1] = array();
$miArray[2] = array();
$miArray[0][0] = "chau";
$miArray[0][1] = "adios";
$miArray[0][2] = "algo";
$miArray[1][0] = "";
$miArray[1][1] = "hello";
$miArray[2][0] = "hi";
$miArray[3] = "Bye";
print_r($miArray);

#Arrays dentro de arrays (matrices)

$miArray = array(
    array("chau", "adios", "algo"),
    array("", "hello"),
    array("hi"),
    "Bye"
    );
print_r($miArray);





#Otra forma de definir arrays

$aPeliculas = array("Star wars I", "star wars 2", "star wars 3");
$aPeliculas = ["Star wars I", "star wars 2", "star wars 3"];


#Arrays asociativos

$aAuto = array();
$aAuto["color"] = array("negro", "verde");
$aAuto["marca"] = "Ford";
$aAuto["anio"] = 1908;
$aAuto["precio"] = 800;
$aAuto[] = "USD 800 A USD 1000";

echo "El auto"  .$aAuto["marca"] . " del año " . $aAuto["anio"] . " es de color " . $aAuto["color"][0] . " y su precio es " . $aAuto[0];


#operador ternario
#pregunta? verdadera:falsa;
echo 19>=18? "es mayor de edad": "es menor de edad"




?>