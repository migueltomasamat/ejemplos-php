<?php
    include_once "./funciones.php";

    $archivo=$_GET['file'];
    

    if (!isset($_GET['file'])){
        echo "Parámetros insuficientes";
    }else{
        if(file_exists($archivo)){
            //El parámetro y el fichero existen
            header("Content-type: ".mime_content_type($archivo));
            header("Content-Disposition: attachment; filename=".$archivo);
            header("Content-length:".filesize($archivo));
            readfile($archivo);

        }

    }