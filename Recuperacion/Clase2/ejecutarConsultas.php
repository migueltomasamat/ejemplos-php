<?php
    session_start();
    include_once("./funcionesBasesDatos.php");

    echo "<br>";
    if (existeUsuario($_POST["usuario"])){
        echo "El usuario existe";
        echo "<br>";
        echo consultaContrasenyaUsuario($_POST["usuario"]);
        $contraseña = $_POST["pass"];

        if(password_verify($contraseña,consultaContrasenyaUsuario($_POST["usuario"]))){
            echo "Usuario y contraseña correctos";
            $_SESSION["usuario"]=$_POST["usuario"];
            $_SESSION["pass"]=$_POST["pass"];
        }else{
            echo "Contraseña incorrecta";
        }


    }else{
        echo "el usuario no existe";
    }
