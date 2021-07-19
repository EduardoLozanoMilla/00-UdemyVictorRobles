<?php

$error = "Faltan valores";

// Mejor usar empty para comprobar si viene vacio.
if(empty($_POST['nombre']) && empty($_POST['apellidos']) && empty($_POST['edad']) && empty($_POST['email']) && empty($_POST['pass'])){
    
    $error = "Todos los valores correctos";
    
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $edad = $_POST['edad'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    
}else{
    $error = "Faltan valores";
    header("Location:00-indexFormularioValidacion.php?error=$error");
}

?>


<!DOCTYPE HTML>

<html lang="es">
    
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Validacion de Formularios PHP</title>
        
    </head>
    
    <body>
        <?php if($error == 'Todos los valores correctos'): ?>
        <h2>Datos validados correctamente</h2>
            <p><?=$nombre?></p>
            <p><?=$apellidos?></p>
            <p><?=$edad?></p>
            <p><?=$email?></p>
            <p><?=$pass?></p>
        <?php endif; ?>
    </body>
    
</html>



