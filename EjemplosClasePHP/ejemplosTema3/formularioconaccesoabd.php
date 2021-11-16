<?php
    include_once ("./funciones.php");
?>
<html>
    <head>
        <title>Formularios con Acceso a Base de Datos</title>
    </head>
    <body>
        <form action="" method="post">

        <label for="nombre">Introduce tu nombre</label>
        <input type="text" name="nombre" id="nombre"><br>

        <label for="contrasenya">Introduce tu contraseña</label>
        <input type ="password" name="contrasenya" id="contrasenya"><br>

        <label for="comunidad">Selecciona tu comunidad autónoma</label>
        <select name="comunidad">
            <?php
                $conexion = conectarBD();
                $resultado = mysqli_query($conexion,"SELECT nombre FROM comunidades");

                while ($fila = mysqli_fetch_assoc($resultado)){
                    echo "<option>".$fila["nombre"]."</option>";
                }
            
            
            
            
            ?>
        </select>






        </form>






    </body>
</html>