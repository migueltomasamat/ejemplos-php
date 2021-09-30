<?php
/*
 * Crea un script en PHP con dos variables numéricas,
 * la primera indicará cuantas veces debemos imprimir el segundo por pantalla,
 * pero en cada iteración muestra el valor anterior multiplicado por 2.
 * Por ejemplo, si las variables valen 4 y 6 la salida será: 6 12 24 48.
 */
$repeticiones=4;
$valor=6;

for ($i=0;$i<$repeticiones;$i++){
    if($i=$repeticiones-1){
        echo ($i * $valor) ." ";
    }
    echo ($i * $valor).".";
}