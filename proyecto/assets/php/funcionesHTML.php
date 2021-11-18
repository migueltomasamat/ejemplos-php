<?php
function generarEncabezadoHTML($titulo){
    echo "
    <!DOCTYPE html>
    <html xmlns='http://www.w3.org/1999/xhtml'>
    <head>
        <meta charset='utf-8' />
        <meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1' />
        <meta name='description' content='' />
        <meta name='author' content='' />
        <title>$titulo</title>
        <!-- BOOTSTRAP CORE STYLE CSS -->
        <link href='assets/css/bootstrap.css' rel='stylesheet' />
        <!-- FONT AWESOME CSS -->
        <link href='assets/css/font-awesome.min.css' rel='stylesheet' />
         <!-- STYLE SWITCHER  CSS -->
        <link href='assets/css/styleSwitcher.css' rel='stylesheet' />
        <!-- CUSTOM STYLE CSS -->
        <link href='assets/css/style.css' rel='stylesheet' />  
         <!--GREEN STYLE VERSION IS BY DEFAULT, USE ANY ONE STYLESHEET FROM TWO STYLESHEETS (green or red) HERE-->
         <link href='assets/css/themes/green.css' id='mainCSS' rel='stylesheet' />   
      <!-- Google	Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css' />
    </head>
    <body>
    ";
}

function generarBarraNavegacionHTML(){
    echo "
    
    <div class='navbar navbar-inverse navbar-fixed-top move-me' id='menu'>
        <div class='container'>
            <div class='navbar-header'>
                <button type='button' class='navbar-toggle' data-toggle='collapse' data-target='.navbar-collapse'>
                    <span class='icon-bar'></span>
                    <span class='icon-bar'></span>
                    <span class='icon-bar'></span>
                </button>
                <a class='navbar-brand' href='index.php'><img class='logo-custom' src='assets/img/logo180-50.png' alt='logo discosis'  /></a>
            </div>
            <div class='navbar-collapse collapse'>
                <ul class='nav navbar-nav navbar-right'>
                    <li ><a href='index.php'>INICIO</a></li>
                     <li><a href='#features'>DONDE ESTAMOS</a></li>
                    <li><a href='#developers'>EQUIPO</a></li>
                     <li><a href='#pricing'>SERVICIOS</a></li>
                     <li><a href='registro.php'>REGISTRO</a></li>
                     <li><a href='#contact'>CONTACTO</a></li>
                     <li><a href='mailto:info@discosis.es?Subject=Contacto' target='_top'> <i class='fa fa-envelope-o'></i><span class='home-mail'>e-mail: info@discosis.es</span></a></li>
                </ul>
            </div>
           
        </div>
    </div>
    
    ";
}