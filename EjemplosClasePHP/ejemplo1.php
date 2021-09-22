<?php
    $peso = 75;
    $altura = 1.99;

    $imc = $peso/($altura*$altura);

    
    echo "Tu índice de masa corporal es: $imc";
    echo "</br>";
    if($imc > 20){
        echo "Te hace falta perder algún kilito";
    }else{
        echo "Tu peso parece correcto para tu altura";
    }