<?php

/* 
 *  Hay que borrarla y caducarla
 */

if($_COOKIE['manolo']){
    unset($_COOKIE['manolo']);
    setcookie('manolo', '', time() - 100);
    echo "La cookie esta borrada con unset y caducada con time()-100";
}

// Esto despues de borrarla nos redirige directamente a ver cookies de nuevo.
header('Location:01-verCookies.php');