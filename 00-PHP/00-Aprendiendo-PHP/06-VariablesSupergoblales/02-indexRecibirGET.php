<?php
    
    /*
     *  PARA RECIBIR LOS DATOS ENVIADOS DEL FORMULARIO, USAMOS LA VARIABLE "$_GET"
     *  esta forma de coger los datos van a traves de la url y es muy accesible. El post es mas privado y seguro.
     */

    $nombreUsuario = $_GET['nombre'];
    $apellidosUsuario = $_GET['apellidos'];
    
    echo '<h1>' . $nombreUsuario . ' ' . $apellidosUsuario . '</h1>';
    var_dump($_GET);
    
?>

