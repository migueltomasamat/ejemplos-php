<?php

/*
Define un función que muestre todos los elementos de un array que se pase por parámetro. 
Nota: el array solamente tendrá una dimensión.
*/

$array = array ("hola", "adios","es miernes");

function imprimirArray($miarray){
    foreach ($miarray as $cadena){
        echo "$cadena <br>";
    }
}

imprimirArray($array);

function imprimirArrayCapital(&$miarray){
    for ($i=0;$i<count($miarray);$i++){
        $miarray[$i][0]=strtoupper($miarray[$i][0]);
        echo $miarray[$i]."<br>";
    }
}

imprimirArrayCapital($array);

imprimirArray($array);

/*
Crea una función que ponga la primera letra de cada palabra en mayúscula para una cadena de 
caracteres que reciba como parámetro.
*/

$cadena = "hola soy miguel y quiero largarme de aqui";


function estiloTitulo ($cadena){
    $i=0;
    do{
        
        if ($i==0){
            $cadena[$i]=strtoupper($cadena[$i]);
        }elseif($cadena[$i]==" "){
            $cadena [$i+1] = strtoupper($cadena[$i+1]);
        }
        $i++;
    }while($i< strlen($cadena)); 
    return $cadena;
}

echo estiloTitulo($cadena);
//Crea una función que recibiendo un número variable de parámetros numéricos calcule la media aritmética de los mismos.

//Crea un función que pasados dos arrays los una en una matriz de dos diménsiones que se le pase como un tercer parámetro por referencia.

//Crear una función que pasado un IBAN (Número de cuenta corriente) por parámetro devuelva en una array con las claves pais, ccontrol, cbanco, csucursal, ccontrol, ccuenta. Además realiza dentro de la función la comprobación de que el número IBAN es correcto.
