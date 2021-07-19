<?php
    
    /*
     *  PARA RECIBIR LOS DATOS ENVIADOS DEL FORMULARIO, USAMOS LA VARIABLE "$_POST"
     *  Esta es la forma mas segura y apropiada para formularios.
     */

    $nombreUsuario = $_POST['nombre'];
    $apellidosUsuario = $_POST['apellidos'];
    
    echo '<h1>' . $nombreUsuario . ' ' . $apellidosUsuario . '</h1>';
    var_dump($_POST);
    
?>