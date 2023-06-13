<?php
$hora = readline("Ingrese la hora:");

$salida = match(true){
    $hora <= 1 => "Es muy temprano",
    $hora >= 6 => "Todavia es temprano",
    $hora <= 6 => "Ya es de tarde",
    $hora >= 21 => "Ya se va a terminar el dia",
    $hora <= 24 => "24"
};
echo $salida;
?>