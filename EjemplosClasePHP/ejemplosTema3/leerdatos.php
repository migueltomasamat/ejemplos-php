<?php
    session_start();
    include_once ("./funciones.php");
    generarEncabezadoHTML("Comprobación Usuario");
    $usuario = $_POST["usuario"];
    $pass = $_POST["pass"];

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
        echo "La contraseña se ha validado";
        $_SESSION['nombreUsuario'] = $usuario;
    }
        

    

    //Otro modo de acceder a los resultados de la consulta    
    /*$resultado = mysqli_stmt_get_result($sentencia);

    $fila = mysqli_fetch_assoc($resultado);

    echo $fila["pass"]."<br>";

    if (password_verify($pass,$fila["pass"]))
        echo "La contraseña es correcta";

    */


    if (comprobarUsuario($_POST['usuario'],$_POST['pass'])){
        $_SESSION['nombreUsuario']=$_POST['usuario'];
    }

    generarCierreHTML();