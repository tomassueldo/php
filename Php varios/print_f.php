<?php

function print_f($variable){
    if(is_array($variable)){
        //Si es un array, lo recorro y guardo el contenido en el archivo "datos.txt"
        $contenido = "";
        foreach($variable as $var){
            $contenido .= $var . "\n";
            file_put_contents("datos.txt", $contenido);
        }
    }else{
        //Es string , guardo el contenido en el archivo "datos.txt"
        file_put_contents("datos.txt", $variable);
    }
}

$aNotas = array(8,5,7,9,10);
$msg = "Este es un mensaje";
print_f($aNotas);
echo "Archivo generado";
