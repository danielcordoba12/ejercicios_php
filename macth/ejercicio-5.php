<?php
$dia = readline("Ingrese un numero del 1 al 7:");

$action = match ($dia){
    "1" => "Lunes",
    "2" => "Martes",
    "3" => "Miercole",
    "4" => "Jueves",
    "5" => "Viernes",
    "6" => "Sabado",
    "7" => "Domingo",
    default => "Numero no valido"
};
echo $action;

?>