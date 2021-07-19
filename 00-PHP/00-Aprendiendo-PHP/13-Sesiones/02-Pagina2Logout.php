<?php

/* 
 *  
 */

session_start();
echo "Sesion sin destruir <br>";
echo $_SESSION['variableSession'] . "<br>";

session_destroy();
echo "Sesion destruida <br>";
echo $_SESSION['variableSession'] . "<br>";


// La primera vez imprime la variable pero si cambiamos a pagina1 o refrescamos la pagina no saldria.



