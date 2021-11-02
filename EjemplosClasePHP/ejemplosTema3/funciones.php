<?php

//Definición de parámetros de acceso a la base de datos

define ("SERVIDOR","localhost");
define ("USUARIO","iawe_miguel");
define ("PASSWORD","leugim");
define ("BASEDATOS","bd_ejemplo");

function conectarBD(){
    $conexion = mysqli_connect(SERVIDOR,USUARIO,PASSWORD,BASEDATOS);

    if (!$conexion){
        echo "Se ha producido un error en la conexión";
        return false;
    }

    return $conexion;
}


function aumentarEdadCincuentones ($aumentoanyos){
    $conexion = conectarBD();
    $consulta = "update entrenadores where edad>50 set edad=edad+$aumentoanyos";
    $resultado = mysqli_query($conexion,$consulta);
    if($resultado){
        echo "La edad de los entrenadores se ha actualizado";
    }
}

function generarFormularioJugador (){

    


}