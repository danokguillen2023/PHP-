<?php

    $base = 2;
    $exp = 5;

    //2 * 2 * 2 * 2 * 2

    $resultado = 1;
    $i =1;

    while ($i <= $exp) {
        $resultado = $resultado * $base;
        $i ++;
    }

    echo "El valor de $base elevado a $exp es: $resultado";

?>