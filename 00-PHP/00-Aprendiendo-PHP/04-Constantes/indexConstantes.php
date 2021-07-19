<?php
    
    // El valor de las constantes nunca puede variar ni modificarse.
    define('Nombre', 'Eduardo Lozano Milla');
    define('PaginaWeb', 'desarrolloLozano.es');
    
    echo '<h1>' . Nombre . '</h1>';
    echo '<h1>' . PaginaWeb . '</h1>';

    // Constantes predefinidas, cualquiera que empiece por "PHP_" o "__" y ya aparecen todas sugeridas.
    echo PHP_OS . ' -- Sistema operativo<br>';
    echo PHP_VERSION . ' -- Version de PHP<br>';
    echo PHP_EXTENSION_DIR . ' -- Extension del directorio de PHP<br>';
    echo __LINE__ . ' -- Numero de la linea<br>';
    echo __FILE__ . ' -- Ruta completa del archivo<br>';
    echo __FUNCTION__ . ' -- Dice en que funcion se encuentra este echo, siempre que este dentro de una funcion<br>';
    
?>

