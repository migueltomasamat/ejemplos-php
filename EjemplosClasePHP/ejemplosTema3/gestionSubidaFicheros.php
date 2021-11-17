<?php

    
    //Mostrar información del fichero subido

    if (!isset($_FILES['upload'])){
        echo "Error. No se ha podido subir el fichero";
    }

    $ruta_fichero = $_FILES['upload']['tmp_name'];

    $tamanyo = $_FILES['upload']['size'];

    $nombre = $_FILES['upload']['name'];

    $error = $_FILES['upload']['error'];

    if($error == UPLOAD_ERR_OK)
        echo "El fichero $nombre está almacenado en $ruta_fichero con un tamaño de $tamanyo";
    else{
        echo "No se ha podido acceder al fichero";
    }

    //Comprobamos si existe la carpeta y si no la creamos
    $ruta_destino = "./".$_POST["usuario"]."/";
    $ruta_anyo_actual = $ruta_destino.date("Y")."/";
    if (!file_exists($ruta_destino)){
        mkdir($ruta_destino,0755,true);
        
    }else{
        
        if(!file_exists($ruta_anyo_actual));
            mkdir($ruta_anyo_actual,0755,true);
    }

    $nombre = str_replace(' ','_',$nombre);
    move_uploaded_file($ruta_fichero,$ruta_anyo_actual.$nombre);

    //<a href="./descargarDocumento.php?file=".$ruta_anyo_actual.$nombre"&type=".mime_content_type($ruta_anyo_actual.$nombre);
        

    