<?php

$nota = readline("Ingrese su nota:");

$resultado = match(true){
    $nota <= 30 => "Muy mal",
    $nota <= 30 => "Mal",
    $nota <= 50 => "Regular",
    $nota <= 70 => "Bien",
    $nota <= 90 => "Excelente",
    $nota <= 100 => "Perfecto",
    $nota >= 101 => "Nota no valida"
};
echo $resultado;
?>