<?php
    include_once ('./funciones.php');
    echo "<form action='insertarMascota.php' method='post' enctype='multipart/form-data'>

    <label for='nombremascota'>Introduce el nombre de la mascota</label>
    <input type='text' name='nombremascota' id='nombremascota'>
    <label for='imagenmascota'>Selecciona la imagen de la mascota</label>
    <input type='file' name='imagenmascota' id='imagenmascota'>
    <label for='seleccionequipo'></label>
    <select name='seleccionequipo' id='seleccionequipo'>";
    
    $conexion = conectarBD();
    $resultado = mysqli_query($conexion,"SELECT nombre_eq FROM equipo");
    
    while ($fila=mysqli_fetch_assoc($resultado)){
        echo "<option>".$fila['nombre_eq']."</option>";
    }

    
    echo "</select>
    <button type='submit'>Enviar</button>
    
    
    </form>";
