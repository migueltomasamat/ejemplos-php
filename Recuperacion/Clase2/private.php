<?php

    include_once ("./funcionesPlantilla.php");
    

    cabeceraHTML("Inicio");

    $arrayOpciones = array("Inicio"=>"/inicio.php",
                    'Contacta Con Nosotros'=>"./areaPrivada.php",
                    "Log In"=>"./Desconectar.php");

    BarraNavegacion($arrayOpciones);

    presentacionPrincipal("Contacto","Danos tus datos para enviarte un mensaje");
    