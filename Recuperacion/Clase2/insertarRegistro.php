<?php

    include_once ("./funcionesBasesDatos.php");
    echo "Estos son los parámetros que hemos obtenido<br>";

    /*echo $_POST["usuario"];
    echo $_POST["pass"];
    echo $_POST["direccion"];*/

    insertarUsuario($_POST["usuario"],$_POST["pass"],$_POST["direccion"]);

    //BorrarUsuario($_POST["usuario"]);