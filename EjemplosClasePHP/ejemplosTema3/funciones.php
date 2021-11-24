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

function desconectarBD ($conexion){
    mysqli_close($conexion);
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

function comprobarUsuario($usuario,$pass){
    $con = conectarBD();
    $sql = "SELECT pass FROM usuario WHERE nombre = ?";

    //Se prepara la sentencia 
    $sentencia = mysqli_prepare($con,$sql);

    //Se asocian los parámetros a la sentencia y se ejecuta la misma
    mysqli_stmt_bind_param($sentencia,"s",$usuario);
    mysqli_stmt_execute($sentencia);

    //Acceso a los resultados de la ejcución de la consulta
    $pass_cifrado;
    mysqli_stmt_bind_result($sentencia,$pass_cifrado);

    //Se mueve a la siguiente fila del conjunto de resultados, en este caso solamente uno.
    mysqli_stmt_fetch($sentencia);

    //Se comprueba que la contraseña sea correcta
    if (password_verify($pass,$pass_cifrado)){
        return true;
    }else{
        return false;
    }
}

function usuarioExiste ($nombreUsuario){
    $con = conectarBD();
    $sql = "SELECT * FROM usuario WHERE nombre = ?";

    //Se prepara la sentencia 
    $sentencia = mysqli_prepare($con,$sql);

    //Se asocian los parámetros a la sentencia y se ejecuta la misma
    mysqli_stmt_bind_param($sentencia,"s",$usuario);
    if (mysqli_stmt_execute($sentencia)){
        return true;
    }else
        return false;
}


function formularioCargaArchivos($paginaAction){

    echo "<form method='post' name='formularioSubida' enctype='multipart/form-data' action='".$paginaAction."'>
            <label for='usuario'>Introduce tu nombre de usuario</label>
            <input type='text' name=usuario id='usuario'>
            <label for= 'upload' >Carga el fichero a subir</label>
            <input type='file' name='upload' id='upload'>

            <button type='submit'>Enviar Datos</button>
        </form>";
}

function mostrarFichero($arrayFicheros,$ruta){

    echo "<table border=1px solid>

        <tr>
            <th>Nombre Fichero</th>
            <th>Enlace Descarga </th>
        </tr>";
        
        
        foreach ($arrayFicheros as $fichero){
            if(!($fichero == '.' || $fichero=='..')){
            echo "<tr>
                <td>$fichero</td>
                <td>
                    <a href='descargarDocumento.php?file=".$ruta."/".$fichero."'>Descargar</a>"
                ."</td>
            </tr>";
            }
        }

    echo "</table>";


}


//Funciones de acceso a datos Ejemplo

function saberIdEquipo ($nombreEquipo){

    $conexion = conectarBD();
    $sentencia = mysqli_prepare($conexion,"SELECT codigo_eq FROM equipo WHERE nombre_eq=?");

    mysqli_stmt_bind_param($sentencia,"s",$nombreEquipo);

    mysqli_stmt_bind_result($sentencia,$resultadosEquipo);

    mysqli_stmt_execute($sentencia);

    mysqli_stmt_fetch($sentencia);

    desconectarBD($conexion);
    
    return $resultadosEquipo;
}

function almacenarMascota($nombreMascota,$imagen,$idEquipo){

    $conexion = conectarBD();

    $sentencia = mysqli_prepare($conexion, "INSERT INTO mascotas(nombre,foto,id_equipo)
    VALUES (?,?,?)");

    mysqli_stmt_bind_param($sentencia,"ssi",$nombreMascota,$imagen,$idEquipo);

    mysqli_stmt_execute($sentencia);

    desconectarBD($conexion);

}