<?php

    define("SERVIDOR","localhost");
    define("USUARIO","miguel");
    define("CONTRASENYA","leugim");
    define("BASEDATOS","recuperacion");

    function conectarBaseDatos(){
        return mysqli_connect(SERVIDOR,USUARIO,CONTRASENYA,BASEDATOS);
    }


    function insertarUsuario($nombre,$contrasenya,$direccion){
        if($con=conectarBaseDatos()){
            echo "conectado";
        }else{
            echo "error de conexion";
        }
        $contrasenyaCifrada = password_hash($contrasenya,PASSWORD_DEFAULT);
        $sentencia="INSERT INTO usuario (nombre_usuario,contrasenya,direccion) values(?,?,?)";

        $sentenciaPreparada = mysqli_prepare($con,$sentencia);

        mysqli_stmt_bind_param($sentenciaPreparada,"sss",$nombre,$contrasenyaCifrada,$direccion);

        if(mysqli_stmt_execute($sentenciaPreparada)){
            echo "Se ha insertado el usuario correctamente";
        }else{
            echo "Ha habido un error en la inserción";
        }


    }


    function BorrarTodosUsuario(){
        if($con=conectarBaseDatos()){
            echo "conectado";
        }else{
            echo "error de conexion";
        }

        $sentencia="DELETE FROM usuario";

        $sentenciaPreparada = mysqli_prepare($con,$sentencia);

        if(mysqli_stmt_execute($sentenciaPreparada)){
            echo "Se ha borrado todos los usuarios";
        }else{
            echo "Ha habido un error en el borrado";
        }

    }


    function BorrarUsuario($nombreUsuario){
        if($con=conectarBaseDatos()){
            echo "conectado";
        }else{
            echo "error de conexion";
        }

        $sentencia="DELETE FROM usuario where nombre_usuario=?";

        $sentenciaPreparada = mysqli_prepare($con,$sentencia);

        mysqli_stmt_bind_param($sentenciaPreparada,"s",$nombreUsuario);

        if(mysqli_stmt_execute($sentenciaPreparada)){
            echo "Se ha borrado todos los usuarios";
        }else{
            echo "Ha habido un error en el borrado";
        }

    }

    function ConsultaNombreUsuario($identificador){

        if($con=conectarBaseDatos()){
            echo "conectado";
        }else{
            echo "error de conexion";
        }

        $sentencia = "SELECT nombre_usuario FROM usuario WHERE id = ?";
        $sentenciaPreparada = mysqli_prepare($con, $sentencia);
        mysqli_stmt_bind_param($sentenciaPreparada,"i",$identificador);
        mysqli_stmt_execute($sentenciaPreparada);
        mysqli_stmt_bind_result($sentenciaPreparada,$nombreUsuario);
        mysqli_stmt_fetch($sentenciaPreparada);
        return $nombreUsuario;




    }

    function existeUsuario ($nombreUsuario){

        if($con=conectarBaseDatos()){
            echo "conectado";
        }else{
            echo "error de conexion";
        }

        $sentencia = "SELECT id FROM usuario WHERE nombre_usuario = ?";
        $sentenciaPreparada = mysqli_prepare($con, $sentencia);
        mysqli_stmt_bind_param($sentenciaPreparada,"s",$nombreUsuario);
        mysqli_stmt_execute($sentenciaPreparada);
        mysqli_stmt_bind_result($sentenciaPreparada,$idUsuario);
        mysqli_stmt_fetch($sentenciaPreparada);
        if ($idUsuario!=0){
            return true;
        }else{
            return false;
        }
    }

    function consultaContrasenyaUsuario($nombreUsuario){

        if($con=conectarBaseDatos()){
            echo "conectado";
        }else{
            echo "error de conexion";
        }

        $sentencia = "SELECT contrasenya FROM usuario WHERE nombre_usuario = ?";
        $sentenciaPreparada = mysqli_prepare($con, $sentencia);
        mysqli_stmt_bind_param($sentenciaPreparada,"s",$nombreUsuario);
        mysqli_stmt_execute($sentenciaPreparada);
        mysqli_stmt_bind_result($sentenciaPreparada,$passUsuario);
        mysqli_stmt_fetch($sentenciaPreparada);
        return $passUsuario;




    }

