<?php

function valoracion($nombre, $rating = 5){
    echo "$nombre tiene un rating de  $rating";

}

// valoracion("Curso de php 8 desde cero", 4);

function concatenar(...$palabras){

    $resultado = "";

    foreach ($palabras as $palabra) {
        $resultado .= $palabra . " ";
    }

    echo $resultado;
}

concatenar('curso', 'php8', 'desde', 'cero');

