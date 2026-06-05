<?php

    $a = 8;
    $b = 9;

    // if($a == 1){
    //     echo"Lunes<br>";
    // }elseif($a == 2){
    //     echo"Martes<br>";
    // }elseif($a == 3){
    //     echo"Miercoles<br>";
    // }elseif($a == 4){
    //     echo"Jueves<br>";
    // }elseif($a == 5){
    //     echo"Viernes<br>";
    // }elseif($a == 6){
    //     echo"Sabado<br>";
    // }elseif($a == 7){
    //     echo"Domingo<br>";
    // }


        //SWITCH


    switch ($a) {
        case '1':
             echo"Lunes<br>";
            break;
        case '2':
            echo"Martes<br>";
            break;
        case '3':
            echo"Miercoles<br>";
            break;
        case '4':
            echo"Jueves<br>";
            break;
        case '5':
           echo"Viernes<br>";
            break;
        case '6':
            echo"Sabado<br>";
            break;
        case '7':
            echo"Domingo<br>";
            break;
        
        default:
            echo "El valor de la variabel <strong>A</strong> no es un valor valido<br>";
            break;
    }

            //ESTRUCTURA QUE VIENE CON PHP 8 novedad de php


            echo match($b){
                1 => "LUNES", 
                2 => "MARTES",
                3 => "MIERCOLES",
                4 => "JUEVES",
                5 => "VIERNES",
                6 => "SABADO",
                7 => "DOMINGO",
                default => "El valor de la variable <strong>B</strong> no es un valor valido"
            };





?>