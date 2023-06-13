<?php
$entrada = readline("Ingrese una letra : ");

$action = match ($entrada){
    "a","A" =>  "Es una vocal",
    "i","I" => "Es una vocal",
    "e","E" => "Es una bocal",
    "o","O" => "Es una vocal",
    "u","U" => "Es una vocal",
    default => "No es vocal"
};

echo $action;

?>