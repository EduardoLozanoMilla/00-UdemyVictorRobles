<?php

/* 
 * Una sesion almacena y persiste datos del usuario mientras que este navega en un sitio web
 * hasta que cierra sesion o cierra el navegador.
 *  1 - La sesion detecta que la sesion permanezca invariable hasta que cierre sesion o cierre el navegador
 *  2 - Debera almacenar alguna informacion para mantenerla durante toda la sesion hasta que se cierre.
 */


// Iniciar la sesion
session_start();


// Variable local
$variableNormal = "Soy una variable normal";
// Variable de session
$_SESSION['variableSession'] = "Soy una variable de sesion.";

echo $variableNormal . "<br>";
echo $_SESSION['variableSession'];

// Nos vamos al fichero pagina1 a ver que pasa con las variables de sesion.