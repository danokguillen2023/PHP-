<?php

    for ($i=1; $i <=20; $i++) { 

        // if ($i == 11) {
        //     break;
        // }

        if ($i == 7 || $i == 15 ) {
            die();
        }
        echo $i . "<br>";
    }

    echo "esta linea no se ejecutara";
?>