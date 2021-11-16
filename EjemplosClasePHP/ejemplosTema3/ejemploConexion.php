<?php

//Proceso de conexión a la base de datos
$conexion = mysqli_connect("localhost","iawe_miguel","leugim","bd_ejemplo");

if ($conexion!=false){
    echo "<br>La conexión se ha realizado de forma correcta</br>";
}else{
    echo "<br> Ha habido un problema al conectar a la base de datos.";
}

//Ejemplo de inserción de datos a MySQL desde PHP
$query="INSERT INTO entrenador VALUES (8,'Michel Jordan',54)";
$resultado = mysqli_query($conexion,$query);



//Ejemplo de lectura de una base de datos
$query = "SELECT * FROM entrenador";
$resultado = mysqli_query($conexion,$query);

while ($fila = mysqli_fetch_array($resultado,MYSQLI_ASSOC)){
    print_r($fila);
    echo "<br>";
}



if ($resultado){
    echo "La inserción se ha realizado de forma correcta";
}else{
    echo "La inserción de datos no se ha podido realizar";
}
    


//Proceso de desconexión de la base de datos
if($conexion!=false){
    mysqli_close($conexion);
}