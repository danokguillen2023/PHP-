<?php

declare(strict_types=1);

function sumarEnteros(int $entero1, int $entero2): int | float
{
    return($entero1 + $entero2)/2;
}

$resultado = sumarEnteros(2,5);

echo $resultado;