<?php

$color = readline("Ingrese un color: ");

$action = match ($color) {
    'rojo' => 'Fuerte',
    'amarillo' => 'Calido',
    'verde' => 'Suave',
    default => 'El color no esta registrado'
};
echo $action;
?>