<?php
//Ambito de variables



$a = 5;
$b = 10;

function test(&$n){

    
    $n = $n + 10;
    
}


test($a);
test($b);
echo "<br>";
echo $a . "<br>";
echo $b;


