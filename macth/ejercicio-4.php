<?php

$dia = readline("Ingrese un dia:");
$mes = readline("Ingrese el mes:");
$ano = readline("Ingrese el año:");

$action = match ($mes){
    "1" => "Se celebran los reyes magos",
    "2" => "Se celebran San Valentin",
    "3" => "Se celebran el dia de la mujer",
    "4" => "Se celebran semana santa",
    "5" => "Se celebran el dia de las madres",
    "6" => "Se celebran San pedro",
    "7" => "Se celebran la batalla la independencia",
    "8" => "Se celebran la batalla  de boyaca",
    "9" => "Se celebran el mes del  amor y la amistad",
    "10" => "Se celebran Hallowen",
    "11" => "Se celebran que ya va a llegar diciembre ",
    "12" => "Se celebran fin de año",
    default => "Fecha no valida"

};
echo $action;
?>