<?php


/*

$contador = 5;
while($contador > 0) {
    echo $contador . "<br>";
    $contador--;
}

*/

$aProductos = array("TV samsung", "cafetera oster", "notebook hp");

$contador = 0;
echo "<table>";
while($contador <3){
    echo "<tr><td>" . $aProductos[$contador] . "</td></tr>";
    $contador++;
}

echo "</table>";

#----------------------

#continue
$aNombres = array("Maria", "Juana", "Miguel", "Andres");

for($i = 0; $i < count($aNombres);$i++){  #vulve aca
    if($aNombres[$i]=="Miguel"){
        continue;
    }
    echo "$aNombres[$i]<br>";
}

#BREAK
$aNombres = array("Maria", "Juana", "Miguel", "Andres");

for($i = 0; $i < count($aNombres);$i++){  
    if($aNombres[$i]=="Miguel"){
        break;
    }
    echo "$aNombres[$i]<br>";
}                               #salta aca




#EXIT
#Corta le ejecucion de todo el script

$var = "Un texto";
print_r($var);
exit;
$numero = 1;
echo $numero;
