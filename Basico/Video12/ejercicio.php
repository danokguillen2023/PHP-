<?php

    $filas = 10;

    for ($i=1; $i <= $filas ; $i++) { 
        for ($j=1; $j <= $i ; $j++) { 
            echo "*" .  $j;
        }
        echo "<br>";
    }
?>