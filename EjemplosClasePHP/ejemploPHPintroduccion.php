<?php
    define ("PI", 3.141517 );

    $numeroEntero;

    $numeroEntero = 1625;
    echo 'El valor de $numeroEntero es '.$numeroEntero;
    echo "</br>";
    echo PI;
    echo "</br>";
    echo ($numeroEntero+PI);

    echo "</br>";
    $referencia = &$numeroEntero;
    $referencia = "un numero";

    echo $numeroEntero;
    
    