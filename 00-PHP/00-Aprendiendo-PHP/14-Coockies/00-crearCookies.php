<?php

/*
 * Coockie: Es un fichero que se almacena en el ordenador del usuario que visita
 * la web, con el fin de recordar datos o rastrear cierta informacion o comportamiento del mismo
 * en la web.
 *
 * Las coockies son peores que las sesiones pero para alguna cosa si pueden ser mas recomendables.
 *  - Para guardar algun dato de larga duracion.
 *  - Para hacer algun estudio o rastreo 
 */


// setcookie("nombre", "valor que solo puede ser texto", caducidad, ruta, dominio);



// Coockie Basica
setcookie("manolo", "valor de cookie manolo");

echo $_COOKIE['manolo'];

// Coockie con expiracion de 1 año
//setcookie("unyear", "valor de mi cookie de 365 dias", time()+(60*60*24*365));

//cerramos el php y creamos un archivo, un link que nos va a llevar a ver nuestras coockies

?>

<a href="01-verCookies.php"> Ver las Cookies </a>