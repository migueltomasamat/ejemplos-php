<?php
    include_once ("./funciones.php");

    setcookie("nombreUsuario",$_SESSION['nombreUsuario'],time()+3600,"/iespacomolla.es","iespacomolla.es",false,false);

    setcookie("cookie2");

    generarEncabezadoHTML("Ejemplod de cookies");