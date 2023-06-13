<?php
 $edad = readline("Ingrese su edad: ");

 if($edad < 18){
    echo "No puedes conducir";
 };
 if($edad >= 18){
    $confi = readline("¿Cuenta con licencia de conducir? ");
        if($confi === "si") {
            echo "Puedes conducir";
        };
        if($confi === "no"){
            echo "Debes obtener tu licencia ";
        };
 };