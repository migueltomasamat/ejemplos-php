<?php
    session_start();
    include ("./funciones.php");
    generarEncabezadoHTML("Amigos del Panda - Home");

    if (isset($_SESSION['nombreUsuario']))
        echo "Bienvenido ".$_SESSION["nombreUsuario"];
    else
        echo "Bienvenido desconocido, puedes registrarte para conocer las últimas novedades";

    generarCierreHTML();