<?php
    session_start();

    if (isset($_SESSION["usuario"])){
        $arrayOpciones = array("Inicio"=>"./inicio.php",
                    'Area Privada'=>"./areaPrivada.php",
                    "Desconectar"=>"./Desconectar.php",
                    'Sobre Nosotros',"./SobreNosotros.php");
    }else{
        $arrayOpciones = array("Inicio"=>"./main.php",
                    'Log In'=>"./login.php",
                    "Registrarse"=>"./Desconectar.php",
                    'Sobre Nosotros',"./SobreNosotros.php");
    }

    include_once ("./funcionesPlantilla.php");
    

    cabeceraHTML("Inicio");

    /*$arrayOpciones = array("Inicio"=>"./main.php",
                    'Area Privada'=>"./areaPrivada.php",
                    "Desconectar"=>"./Desconectar.php",
                    'Sobre Nosotros',"./SobreNosotros.php");*/

    BarraNavegacion($arrayOpciones);

    presentacionPrincipal("Discosis","La mejor tienda de vinilos del planeta Tierra");
    //presentacionPrincipal("Vinilos a mogollón","La mejor seleccion de vinilos de musica actual");


    $caracteristicas = array("Vinilos Clasicos","La mejor seleccion de vinilos clásicos ", "caracteristica2","descripcion2");
    insertarCaracteristicas("Principales Características",$caracteristicas);
    insertarCaracteristicas("Principales Características",$caracteristicas);