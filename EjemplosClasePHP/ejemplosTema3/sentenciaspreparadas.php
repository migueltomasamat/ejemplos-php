<?php
    include_once('./funciones.php');

    //Conectar a la base de datos

    $conexion = conectarBD();

    
    //Consulta que queremos ejecutar en la base de datos
    $query = "INSERT INTO entrenador VALUES (?,?,?)";

    //Preparamos la consula almacenandola en la base de datos.
    $consultaPreparada = mysqli_prepare($conexion, $query);

    $idEntrenador = 9;  //En formualrio cambiar por $_POST["id"]
    $nombreEntrenador = "Sam Cassel";
    $edadEntrenador = 56; 

    //Sustituir los parametros de la consulta
    mysqli_stmt_bind_param($consultaPreparada,"isi",$idEntrenador,$nombreEntrenador,$edadEntrenador);

    /* Si queremos comprobar la correcta sustitución de los parámetros

    if (mysqli_stmt_bind_param($consultaPreparada,"isi",$idEntrenador,$nombreEntrenador,$edadEntrenador)){
        echo "Se han sustituido correctamente los parámetros";
    }else{
        echo "Ha habido un problema en la sustitución de los parámetros";
    }

    */

    //Ejecución de la consulta

    $resultado = mysqli_stmt_execute($consultaPreparada);

    echo "Se han insertado ".mysqli_stmt_affected_rows($consultaPreparada);


    echo "Se ha producirdo un error ".mysqli_stmt_error($consultaPreparada);


    //Creación de una consulta con sentencias preparadas

    $parametroEdadEntrenador = 50;

    $query2 = "SELECT * FROM entrenador WHERE edad > ?";

    $consultaPreparada2 = mysqli_prepare($conexion,$query2);

    mysqli_stmt_bind_param($consultaPreparada2,"i",$parametroEdadEntrenador);

    mysqli_stmt_execute($consultaPreparada2);

    echo "La consulta ha devuelto ".mysqli_stmt_affected_rows($consultaPreparada2)." filas";

    $resultado2 = mysqli_stmt_get_result($consultaPreparada2);

    while ($fila = mysqli_fetch_assoc($resultado2)){
        echo "<br>";
        print_r($fila);
    }


