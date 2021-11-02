<?php
/*
Juan y su familia se fueron de vacaciones a EE.UU. y 
comieron en tres restaurantes distintos. 
Pagaron 124, 48 y 268$. 
Allí todo el mundo deja propina, así que Juan quiere crear una calculadora de propinas. 
Ha pensado que le gustaría dar un 20 % de propina si la factura es menor de 50 $, 
15 % si la factura está entre 50 $ - 200 $ y un 10 % si la factura es de más de 200 $.
Al final, a Juan le encantaría tener tres arrays:

    El primero contiene el valor de todas las facturas. Este no se calcula, hay que crear el array 
    poniendo a mano los valores
    El segundo contiene las tres propinas (una por cada factura)
    El tercero contiene las tres cantidades finales que tiene que pagar 

Muestra el resultado por pantalla debidamente formateado.
*/

//Mostrar el contenido raw de todo el array
print_r($_POST);


//Accedemos solo a los valores del array
foreach ($_POST as $parametro){
    echo "<br>El parametro que me ha pasado la web es: $parametro";
}


//Acceder a los valores pero tambén a las claves
foreach ($_POST as $clave => $valor){
    echo "<br> El parámetro con nombre $clave tiene el valor: $valor";
}

//Acceso a un valor del array asociativo mediante su clave.
echo "<br> El gasto en el tercer restaurante es de ".$_POST['Rest3'];


//Función que cálcula un porcentaje sobre un número en esta caso propina
function calcularPropina($numero, $porcentaje){
    return $numero*($porcentaje/100);
}

//Función que suma un valor a otro, en este caso precio y propina
function calcularPrecioTotal($precioComida, $propina){
    return $precioComida+$propina;
}

//Función que cálcula el porcentaje aplicado sobre un número, en este caso precio de una comida
function calculoPorcentaje($precioComida){
    $porcentaje=0;
    if($precioComida<=50){
        $porcentaje = 20;
    }elseif($precioComida>200){
        $porcentaje = 10;
    }else{
        $porcentaje = 15;
    }
    return $porcentaje;
}

    $arrayPropinas;
    $arrayTotal;

    foreach ($_POST as $clave => $precioComida){
        $porcentaje = calculoPorcentaje($precioComida);
        $arrayPropinas[$clave] = calcularPropina($precioComida,$porcentaje);
        $arrayTotal[$clave]= calcularPrecioTotal($precioComida,$arrayPropinas[$clave]);
    }

    echo "<br>";
    print_r($arrayPropinas);
    print_r($arrayTotal);
    

