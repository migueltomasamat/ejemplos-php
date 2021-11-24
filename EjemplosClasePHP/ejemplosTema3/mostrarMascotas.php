<?php
    include_once('./funciones.php');

    $conexion = conectarBD();
    $resultado = mysqli_query($conexion,"SELECT id_mascota, nombre, foto FROM mascotas");

    echo "<table border= '1px black solid'>
        <tr>
            <th> Id Mascota</th>
            <th> Nombre </th>
            <th> Foto </th>
        </tr>";
            
    while ($fila = mysqli_fetch_assoc($resultado)){
        echo "<tr>
                <td>".$fila['id_mascota']."</td>
                <td>".$fila['nombre']."</td>
                <td><img src='data:image/png;base64,".base64_encode($fila['foto'])."' width='50px' height='50px'></td>
            </tr>";
    }
    echo "</table>";