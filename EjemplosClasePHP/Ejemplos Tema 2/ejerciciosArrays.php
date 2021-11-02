<?php
/*
    Define el siguiente array y cálcula la suma total de los valores que contiene.*/


$numeros=array(2,24,80,5,7,20,32,45,67,45,78);
//Definición equivalente

//$numeros=[2,24, 80, 5, 7, 20 ,32 ,45 ,67, 45, 78];

$resultado=0;

foreach ($numeros as $numero){
    $resultado = $resultado + $numero;
}

echo $resultado;
echo "<br>";
echo "El resultado de la suma de los valores del array es: ".array_sum($numeros);


/*
Calcula del array definido anteriormente el productorio de los valores pares del array 
por una parte y los valores impares por otra parte.*/

$productorioPar = 1;
$productorioImpar = 1;

for($i=0;$i<count($numeros);$i++){
    if( $i % 2 == 0){
        $productorioPar = $productorioPar * $numeros [$i]; 
    }else{
        $productorioImpar = $productorioImpar * $numeros [$i];
    }

}
echo "<br>";
echo "El productorio de los elementos pares es: $productorioPar";
echo "<br> El productorio de los elementos impares es: $productorioImpar";




/*Crear un código en php que compruebe si el valor 76 está incluido en el array anterior.*/

$posicion = array_search(76,$numeros);

if($posicion != null){
    echo "<br>El elemento 76 está en la posicion: ". $posicion;
}else{
    echo "<br>No se ha encontrado el número 76";
}

/*Crear un código en php que elimine el último valor del array y lo muestre por pantalla.*/
echo "<br>";
print_r($numeros);

echo "<br>El último elemento del array era: " . array_pop($numeros);

echo "<br>";
print_r($numeros);

/*
    Crear un código en php que elimine los valores duplicados en el array.
*/

echo "<br>";
print_r(array_unique($numeros));



$puntuaciones['Miguel'] = array (80,113,125);
echo "<br>";
print_r($puntuaciones);
$puntuaciones ['Juan'] = array(115,90,178);
echo "<br>";
print_r ( $puntuaciones);


function mediaArray($array){
    $acumulador=0;

    foreach ($array as $numero){
        $acumulador = $acumulador + $numero;
    }
    return $acumulador/count($array);
}
echo "<br>";
echo mediaArray ($puntuaciones['Miguel']);

foreach $puntuacion as $jugadores{
    
}

