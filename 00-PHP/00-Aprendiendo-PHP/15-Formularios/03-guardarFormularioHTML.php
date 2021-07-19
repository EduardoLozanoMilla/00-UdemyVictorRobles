<?php

if(isset($_GET['titulo']) && isset($_GET['descripcion'])){
    
    $tituloRecibido = $_GET['titulo'];
    $descripcionRecibida = $_GET['descripcion'];
    
    echo "<h1>Formulario GET</h1>";
    echo "<h2>$tituloRecibido</h2>";
    echo "<h2>$descripcionRecibida</h2>";
}

if(isset($_POST['titulo']) && isset($_POST['descripcion'])){
    
    $tituloRecibido = $_POST['titulo'];
    $descripcionRecibida = $_POST['descripcion'];
    
    echo "<h1>Formulario POST</h1>";
    echo "<h2>$tituloRecibido</h2>";
    echo "<h2>$descripcionRecibida</h2>";
}

/*
 *  De esta manera los datos son recibidos por un formulario a traves del metodo GET
 *  y pueden ser modificados a traves de la URL. Por lo que no suele ser muy recomendable.
 */


?>
