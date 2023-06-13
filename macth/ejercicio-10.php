<?php
$entrada = readline("Ingrese un numero entre 1 y 5");

$salida =  match ($entrada){
    "1" => "Hoy esta haciendo buen clima",
    "2" => "Mañana sera otro dia",
    "3" => "El hoy es un presente",
    "4" => "El mañana es un misterio",
    "5" => "Eso es todo",
    default => "El numero ingresado es diferente a los indicados"
};
echo $salida;
?>