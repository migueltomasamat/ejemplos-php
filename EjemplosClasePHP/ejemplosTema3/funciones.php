<?php

//Definición de parámetros de acceso a la base de datos

define ("SERVIDOR","localhost");
define ("USUARIO","iawe_miguel");
define ("PASSWORD","leugim");
define ("BASEDATOS","bd_ejemplo");

function conectarBD(): mysqli | false {
    $conexion = mysqli_connect(SERVIDOR,USUARIO,PASSWORD,BASEDATOS);

    if (!$conexion){
        echo "Se ha producido un error en la conexión";
        return false;
    }

    return $conexion;
}


function aumentarEdadCincuentones ($aumentoanyos){
    $conexion = conectarBD();
    $consulta = "update entrenadores where edad>50 set edad=edad+$aumentoanyos";
    $resultado = mysqli_query($conexion,$consulta);
    if($resultado){
        echo "La edad de los entrenadores se ha actualizado";
    }
}

function generarFormularioRegistro($action){

    echo "<form name='registro' action='".$action."' method='post'> 
            <label for='usuario'>Introduce tu nombre de usuario</label>
            <input type='text' name='usuario' id='usuario'>
            <label for='pass'>Introduce tu contraseña</label>
            <input type='password' name='pass' id='pass'>

            <button type='submit'>Pulsa aquí</button>
        </form>";
    


}

function generarEncabezadoHTML($titulo){
    echo "<html charset= utf8>
            <head>
                <title>$titulo</title>
            </head>
          <body>
          ";
}

function generarCierreHTML(){
    echo "
        <div id='pie'>
            <br><center><a href='./indicechungo.php'>Página de inicio</a></center>
        </div>
        </body>
        </html>";
}