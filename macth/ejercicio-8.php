<?php

$entrada = readline("Ingrese un texto");
$legthString = strlen($entrada);


$salida = match(true){
    $legthString >= 10 => "La cadena es mediana" ,
    $legthString >= 25 => "La cadena es larga" ,
    default => "La cadena es corta"
};
echo $salida;
?>