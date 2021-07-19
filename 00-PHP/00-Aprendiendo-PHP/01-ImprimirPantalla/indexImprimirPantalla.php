<!DOCTYPE HTML>

<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <title>Imprimir por pantalla - Master en PHP</title>
    </head>
    <body>
        <h1>Master en PHP - <?php echo "victorroblesweb.es escrito con php</h1>"; ?>
            
        <?="Bienvenido al curso mas grande de PHP (escrito con echo abreviado)"?>
        
        <?php
            // Titular de la seccion, esto es un comentario.
            echo "<h3>Listado de videojuegos:<h3>";
            /*
             * Esto es un comentario multilinea
             */
            echo "<ul>"
                 . "<li>GTA</li>"
                 . "<li>FIFA</li>"
                 . "<li>Mario Bros</li>"
                 . "</ul>";
            // Parrafo explicativo
            echo '<p>Esta es toda'.'-'.'lista de juegos </p>';
                 
        ?>
    </body>
</html>
