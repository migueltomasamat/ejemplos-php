<?php
    include_once ('./funciones.php');

    print_r($_POST);

    //Conseguimos el nombre de la mascota
    $nombreMascota = $_POST['nombremascota'];

    //Conseguimos el id del equipo a partir de su nombre
    $idEquipo = saberIdEquipo($_POST['seleccionequipo']);

    //Tratamiento de la imagen para almacenarla en BLOB
    $ruta_imagen = $_FILES['imagenmascota']['tmp_name'];
    echo $ruta_imagen;
    //move_uploaded_file($ruta_imagen,getcwd()."/".$_FILES['imagenmascota']['name']);
    $imagen_binaria = file_get_contents($_FILES['imagenmascota']['tmp_name']);
    //echo $imagen_binaria;


    almacenarMascota($nombreMascota,$imagen_binaria,$idEquipo);
