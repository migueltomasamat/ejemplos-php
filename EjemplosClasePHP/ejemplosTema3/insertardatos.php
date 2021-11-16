<?php

    include_once ("./funciones.php");
    $password = $_POST["pass"];
    $usuario = $_POST["usuario"];

    //Creamos la consulta para ejecutar una sentencia preparada
    $consulta = "INSERT INTO usuario VALUES (?,?)";

    //Ciframos la contraseña en texto plano que hemos recibido por HTTP con el método POST
    $password_cifrado = password_hash($password,PASSWORD_DEFAULT);

    //Conectamos a la base de datos y ejecutamos la consulta
    //$con = conectarBD();
    $sentencia = mysqli_prepare($con,$consulta);

    //Asignamos los datos a los parametros que hemos definido en la sentencia SQL
    mysqli_stmt_bind_param($sentencia,"ss",$usuario,$password_cifrado);

    //Ejecutamos la inserción del usuario en la base de datos
    if (mysqli_stmt_execute($sentencia))
        echo "Se ha ejecutado correctamente la inserción";