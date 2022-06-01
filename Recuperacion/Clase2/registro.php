<?php

    include_once ("./funcionesPlantilla.php");
    include_once ("./funcionesBasesDatos.php");
    

    cabeceraHTML("Registro");

    $arrayOpciones = array("Inicio"=>"/inicio.php",
                    'Area Privada'=>"./areaPrivada.php",
                    'Sobre Nosotros',"./SobreNosotros.php");

    BarraNavegacion($arrayOpciones);

    presentacionPrincipal("Discosis","Formulario de Registro");
    insertarRegistro("Introduce tus datos personales","insertarRegistro.php");

    conectarBaseDatos();