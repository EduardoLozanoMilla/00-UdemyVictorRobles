<?php

session_start();

// Imprimir esta variable da error porque no se encuentra en este fichero.
//echo $variableNormal;

// Sin embargo la variable session, si nos permitira mostrarla
echo $_SESSION['variableSession'];

// Vamos al archivo pagina2Logout para destruir la sesion y ver como no podemos hacer uso de su variable.