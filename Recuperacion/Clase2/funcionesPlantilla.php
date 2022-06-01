<?php

    function cabeceraHTML($tituloWeb){

        echo "
        
        <!DOCTYPE html>
            <html xmlns='http://www.w3.org/1999/xhtml'>
            <head>
                <meta charset='utf-8' />
                <meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1' />
                <meta name='description' content='' />
                <meta name='author' content='' />
                <title>$tituloWeb</title>
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
        ";
    }

    function BarraNavegacion($arrayOpciones){

        echo "
        
        <body >
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
                        <ul class='nav navbar-nav navbar-right'>";
                            

                        foreach ($arrayOpciones as $nombre=>$enlace){
                            echo "<li><a href='$enlace'>$nombre</a>";
                        }
        

                            echo"
                            <li><a href='mailto:info@discosis.es?Subject=Contacto' target='_top'> <i class='fa fa-envelope-o'></i><span class='home-mail'>e-mail: info@discosis.es</span></a></li>
                        </ul>
                    </div>
                
                </div>
            </div>
        
        
        ";


    }
    function presentacionPrincipal($titulo,$descripcion){

        echo "<section class='header-sec' id='home' >
        <div class='overlay'>
        <div class='container'>
        <div class='row text-center' >
        
            <div class='col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1'>
            
             <h2 data-scroll-reveal='enter from the bottom after 0.1s'>
                 <strong>
                    $titulo
                     </strong>
                     </h2>
                                
                <p data-scroll-reveal='enter from the bottom after 0.8s'>
                    $descripcion
                      
                    </p>
                  
               <br />
                
  
           
           
         </div>
             
            </div>
             </div>
        </div>
        
    </section>

        ";

    }

    function insertarCaracteristicas($titulo,$caracteristicas){

echo "
<section class='features' id='features'>
<div class='container'>
          <div class='row text-center' >
          
              <div class='col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1'>
              
               <h3 data-scroll-reveal='enter from the bottom after 0.1s'>
                   <strong>
                  $titulo
                       </strong>
                       </h3>
               
           </div>
               
              </div>
    <div class='row ' >
          
             <div class='col-lg-6 col-md-6 col-sm-6' data-scroll-reveal='enter from the left after 0.4s' >
                       <div class='media'>
                           <div class='pull-left'>
                               <i class=' fa fa-history fa-5x '></i>

                           </div>
                           <div class='media-body'>
                               <h4 class='media-heading'><strong>".$caracteristicas[0]."</strong></h4>
                               <p>
                                   $caracteristicas[1]
                               </p>

                           </div>
                       </div>
                   </div>
              <div class='col-lg-6 col-md-6 col-sm-6' data-scroll-reveal='enter from the right after 0.7s'>
                       <div class='media'>
                           <div class='pull-left'>
                               <i class=' fa fa-ra fa-5x '></i>

                           </div>
                           <div class='media-body'>
                               <h4 class='media-heading'><strong> $caracteristicas[2] </strong></h4>
                               <p>
                                   $caracteristicas[3]
                               </p>

                           </div>
                       </div>
                   </div>
             
           </div>
               ";



    }

    function insertarRegistro($titulo,$action){

        echo "
        <section class='features' id='features'>
        <div class='container'>
                  <div class='row text-center' >
                  
                      <div class='col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1'>
                      
                       <h3 data-scroll-reveal='enter from the bottom after 0.1s'>
                           <strong>
                          $titulo
                               </strong>
                               </h3>
                       
                   </div>
                       
                      </div>
            <div class='row ' >";
                  
            echo "<form name='registro' action='".$action."' method='post'> 
            <label for='usuario'>Introduce tu nombre de usuario</label>
            <input type='text' name='usuario' id='usuario'>
            <label for='pass'>Introduce tu contraseña</label>
            <input type='password' name='pass' id='pass'>
            <label for='direccion'>Introduce direccion</label>
            <input type='text' name='direccion' id='direccion'>

            <button type='submit'>Pulsa aquí</button>
        </form>"; 
                     
                  echo " </div>
                       ";
        
        
        
    }

    function insertarLogin($titulo,$action){

        echo "
        <section class='features' id='features'>
        <div class='container'>
                  <div class='row text-center' >
                  
                      <div class='col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1'>
                      
                       <h3 data-scroll-reveal='enter from the bottom after 0.1s'>
                           <strong>
                          $titulo
                               </strong>
                               </h3>
                       
                   </div>
                       
                      </div>
            <div class='row ' >";
                  
            echo "<form name='registro' action='".$action."' method='post'> 
            <label for='usuario'>Introduce tu nombre de usuario</label>
            <input type='text' name='usuario' id='usuario'>
            <label for='pass'>Introduce tu contraseña</label>
            <input type='password' name='pass' id='pass'>
            

            <button type='submit'>Pulsa aquí</button>
        </form>"; 
                     
                  echo " </div>
                       ";
        
        
        
    }