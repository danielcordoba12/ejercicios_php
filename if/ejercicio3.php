<?php
$dia = readline("Ingrese un numero del 1 al 7: ");

    if($dia == 1 ){
        echo "Lunes";
    };
    if($dia == 2 ){
        echo "Martes";
    };
    if($dia == 3 ){
        echo "Miercoles";
    };
    if($dia == 4 ){
        echo "Jueves";
    };
    if($dia == 5 ){
        echo "Vieres";
    };
    if($dia == 6 ){
        echo "Sabado";
    };
    if($dia == 7 ){
        echo "Domingo";
    };
    if($dia >=8){
        echo "Numero no valido";
    };
    if($dia <=0){
        echo "Numero no valido"; 
    };
?>