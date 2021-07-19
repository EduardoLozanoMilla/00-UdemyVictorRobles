<?php



?>

<!DOCTYPE HTML>

<html lang="es">
    
    <head>
        
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Validacion de formularios en PHP</title>
        
    </head>
    
    <body>
        
        <h1> Validar formularios en PHP </h1>
        
        <form method="POST" action="01-procesarFormulario.php">
            
            <label for="nombre"> Nombre: </label> <br>
            <input type="text" name="nombre" required="required" pattern="[A-Za-z]+" /> <br>
            
            <label for="apellidos"> Apellidos: </label> <br>
            <input type="text" name="apellidos" required="required" pattern="[A-Za-z]+" /> <br>
            
            <label for="edad"> Edad: </label> <br>
            <input type="number" name="edad" required="required" pattern="[0-9]+" /> <br>
            
            <label for="email"> Email: </label> <br>
            <input type="email" name="email" required="required" /> <br>
            
            <label for="pass"> Contraseña: </label> <br>
            <input type="password" name="pass" required="required" /> <br><br>
            
            <input type="submit" value="Enviar" />
            
        </form>
        
    </body>
    
</html>
