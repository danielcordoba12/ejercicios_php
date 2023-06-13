<?php

$entrada = readline("Ingrese un numero del 1 al 3: ");

$action = match ($entrada) {
    '1' => 'A ingresado el numero 1',
    '2' => 'A ingresado el numero 2',
    '3' => 'A ingresado el numero 3',
    default => 'Numero no registrado'
};
echo $action
?>