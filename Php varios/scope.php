<?php

$bruto = 5000;

function neto($bruto){
    // global $bruto;
    return $bruto - $bruto * 0.17;
}

echo (neto($bruto));