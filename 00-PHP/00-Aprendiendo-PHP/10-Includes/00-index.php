<!DOCTYPE HTML>

<!-- 
ESTA PAGINA PHP TIENE TODO SIN HACER NINGUN INCLUDE.
SOBREMI Y CONTACTO VAN A IMPLEMENTAR LOS INCLUDES DE LA CABECERA Y EL FOOTER
CUALQUIER VARIABLE QUE HUBIERA EN ESTAS PARTES SI SE LLAMASE O USASE POSTERIORMENTE A SER CARGADA SERIA VISIBLE EN CUALQUIER PARTE DEL CODIGO.

INCLUDE -> Incrusta el codigo indicado tantas veces como includes hagas.
INCLUDE_ONCE -> Incrusta el codigo indicado solo una vez.

REQUIRE -> Incluye el codigo indicado y ademas bloquea la ejecucion de la pagina si ese codigo da error.
REQUIRE_ONCE -> Incluye el codigo indicado una unica vez y bloquea toda la ejecucion de la pagina si hubiese algun error.
-->

<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Includes en PHP</title>
    </head>
    <body>
        
        <!-- CABECERA -->
        <div class="cabecera">
            <h1>Includes en PHP</h1>
            <ul>
                <li><a href="00-index.php">Inicio</a></li>
                <li><a href="01-sobreMi.php">Sobre mi</a></li>
                <li><a href="02-contacto.php">Contacto</a></li>
            </ul>
            <hr>
        </div>
        <!-- CONTENIDO -->
        <div>
            <h2>
                Esta es la pagina de INDEX
            </h2>
            <p>
                Texto de prueba de la pagina de INDEX
            </p>
        </div>
        
        <!-- PIE DE PAGINA -->
        <footer>
            <hr>
            Todos los derechos reservados &copy; Eduardo Lozano <?=date('Y')?>
        </footer>
    </body>
 
</html>