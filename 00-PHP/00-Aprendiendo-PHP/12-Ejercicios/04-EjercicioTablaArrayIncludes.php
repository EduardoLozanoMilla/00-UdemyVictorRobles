<?php

/* 
 *  Ejercicio 5. Crear un array con el contenido de la tabla.
 *      ACCION  AVENTURA  DEPORTES
 *      gta     assasins  fifa
 *      cod     crash     moto gp
 *      pubg    farcry    olimpiadas
 * 
 *  Cada fila debe ir en un fichero separado (includes).
 */

$videojuegos = [
    "ACCION" => ["GTA 5", "Call of Duty", "PUBG"],
    "AVENTURA" => ["Assasins Creed", "Crash Bandicoot", "Far Cry"],
    "DEPORTES" => ["Fifa 2021", "Moto GP", "Olimpiadas"]
];


// Para sacar los indices del array usamos array_keys(\$array)
$categorias = array_keys($videojuegos);

?>

<!DOCTYPE HTML>

<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>EJERCICIO 5 Tabla</title>
    </head>
    
    <body>
        
        <!-- CONTENIDO -->
        <div>
            <table border="1">
                <?php require_once '04-EjercicioTablaArrayIncludes/00-Encabezado.php'; ?>
                <?php require_once '04-EjercicioTablaArrayIncludes/01-PrimeraFila.php'; ?>
                <?php require_once '04-EjercicioTablaArrayIncludes/02-SegundaFila.php'; ?>
                <?php require_once '04-EjercicioTablaArrayIncludes/03-TerceraFila.php'; ?>
            </table
        </div>
        
        
    </body>
 
</html>