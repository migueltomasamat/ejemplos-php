<?php
    session_start();

    //Comprobamos si existe una sesión activa
    if (isset($_SESSION['nombreUsuario']))
        setcookie("nombreUsuario",$_SESSION['nombreUsuario'], time()+3600);
    
    //Generamos el encabezado de la página
    include ("./funciones.php");
    generarEncabezadoHTML("Amigos del Panda - Home");

    
    //Comprobamos si existe una cookie en el navegador con el nombre del usuario
    if (isset($_COOKIE['nombreUsuario'])){
        //Comprobamos que el usuario esté en la BD
        if (usuarioExiste($_COOKIE['nombreUsuario']))
            //Creamos una sesión y almacenamos el nombre de usuario
            $_SESSION['nombreUsuario']=$_COOKIE['nombreUsuario'];
    }
    

    //Comprobamos que exista la información del usuario en la sesión para que siga logeado
    if (isset($_SESSION['nombreUsuario'])){
        echo "Bienvenido ".$_SESSION["nombreUsuario"];
        echo "El valor de la cookie es: ".$_COOKIE['nombreUsuario'];
    }else
        echo "Bienvenido desconocido, puedes registrarte para conocer las últimas novedades";

    generarCierreHTML();