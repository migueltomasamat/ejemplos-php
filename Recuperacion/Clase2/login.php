<?php

    include_once ("./funcionesPlantilla.php");
    include_once ("./funcionesBasesDatos.php");
    

    cabeceraHTML("Conectar");

    $arrayOpciones = array("Inicio"=>"/inicio.php",
                    'Area Privada'=>"./areaPrivada.php",
                    'Sobre Nosotros',"./SobreNosotros.php");

    BarraNavegacion($arrayOpciones);

    presentacionPrincipal("Discosis","Formulario de Registro");
    insertarLogin("Introduce tus datos personales","ejecutarConsultas.php");

    conectarBaseDatos();