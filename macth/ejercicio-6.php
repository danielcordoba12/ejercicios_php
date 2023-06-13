<?php
$dia = readline("Ingrese un numero del 1 al 12:");

$action = match ($dia){
    "1" => "Enero",
    "2" => "Febrero",
    "3" => "Marzo",
    "4" => "Abril",
    "5" => "Mayo",
    "6" => "Junio",
    "7" => "Julio",
    "8" => "Agosto",
    "9" => "Septiembre",
    "10" => "Octubre",
    "11" => "Noviembre",
    "12" => "Diciembre",
    default => "Numero no valido"
};
echo $action;

?>
