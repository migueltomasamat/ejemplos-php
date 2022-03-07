<?php

    $variable1= "Esto es una cadena de caracteres";

    echo $variable1;

    if ($variable1==1){
        echo "";
    }else{
        echo "";
    }

    //Definición de una constante

    define("usuario","raquel");

    //Define un constante con el valor de PI

    define("PI",3.1415);

    echo 'El valor de la variable es'.$variable1;

    echo "El valor de la variable es: $variable1";


    //Comprobar si una variable está definida


    if (!isset($_POST['usuario'])){
        //La variable no está definida

    }


    //Operadores de comparacion


    $var1= 0.0;
    $var2= 0;

    if ($var1==$var2){}
        //Cierto

    if ($var1===$var2){}
        //Falso