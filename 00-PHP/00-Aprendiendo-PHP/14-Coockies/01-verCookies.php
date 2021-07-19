<?php

/*
 *  Para mostrar el valor de las coockies, hay que usar $_COOCKIE, variable superglobal y array asociativo.
 */

if(isset($_COOKIE['manolo'])){
    echo "<h2>" . $_COOKIE['manolo'] . "</h2>";
}else{
    echo "No existe la cookie";
}

// Se puede comprobar la coockie en el navegador

?>

<a href="02-borrarCookies.php">Borrar mis cookies</a>