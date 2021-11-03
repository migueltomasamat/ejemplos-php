<?php
    include_once("./funciones.php");
    define("registrosPagina",100);

    $pagina = 1;

    //Conseguimos el valor del parámetro de la URL pagina
    if (array_key_exists("pagina",$_GET)){
        $pagina = $_GET["pagina"];
    }

    //Queremos saber el número de registros que quermos mostrar
    $conexion = conectarBD();
    $resultado = mysqli_query ($conexion,"SELECT count(*) from municipios");

    $fila = mysqli_fetch_array($resultado, MYSQLI_NUM);
    $numeroRegistros = $fila[0];
    echo $numeroRegistros."<br>";

    $numeroPaginas = ceil($numeroRegistros / registrosPagina);
    echo $numeroPaginas."<br>";

    //Generamos la consulta para recuperar los resultados limitados por segmentos
    $segmento = mysqli_query($conexion,"SELECT nombre FROM municipios LIMIT ".(($pagina-1)*registrosPagina) .",".registrosPagina);

    //Mostrar tablas con los datos de los municipios recorriendo los resultados
    while ($fila =mysqli_fetch_assoc($segmento)){  
    echo "<table>";
        echo "<tr>".$fila["nombre"]."</tr>";
    echo "</table>";

    }

    //Mostrar lista de enlaces a las páginas

    for ($i=0;$i<$numeroPaginas;$i++){
        $enlace = '<a href="paginacion.php?pagina=';
        $enlace .=($i+1);
        $enlace .='">';
        $enlace .=($i+1);
        $enlace .="</a> |";
        echo $enlace;
    }