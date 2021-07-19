<?php

/* 
 *  Dentro del formulario se pueden poner:
 *  - Botones, cuadros de texto, listas desplegables
 * 
 *  ATRIBUTOS
 *  - action -> Hace referencia a la pagina a la que va la informacion del formulario
 *  - method (POST o GET) -> Para enviarlo por un metodo u otro.
 *  - enctype -> hay varios tipos pero "multipart/form-data" es para mandar la informacion del formulario al servidor
 * 
 *  ATRIBUTOS INPUT
 *  - autoaction -> Para que seleccione el primero por defecto
 *  - disabled -> Para desabilitar el campo
 *  - maxlength -> Maximo de caracteres
 *  - minlength -> Minimo de caracteres
 *  - pattern -> Para dar expresiones regulares a los input sin validar pattern="[A-Z]+"
 *  - required -> Requerir que vaya con campo para validarlo y enviarlo.
 *  - placeholder -> Para indicar algo dentro del cuadro del input.
 *  - value -> Para meter un valor real por defecto al input.
 *  - checked -> Para los checkbox vendria marcado por default
 *  - multiple -> Para subir varios archivos en lugar de solo 1
 */

?>

<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8"/>
        <title> Formularios PHP y HTML</title>
    </head>
    
    <body>
        
        <h1> Formulario </h1>
        
        <form action="" method="POST" enctype="multipart/form-data">
            
            <!-- CAMPOS DE TEXTO -->
            <label for="nombre"> Nombre: </label>>
            <p> <input type="text" name="nombre" /> </p>
            
            <label for="nombre"> Apellido: </label> 
            <p> <input type="text" name="apellido" /> </p>
            
            <!-- BOTON -->
            <label for="boton"> Boton: </label>
            <p> <input type="button" name="boton" value="clicame" /> </p>
            
            <!-- CHECK-BOX -->
            <label for="sexo"> Sexo: </label>
            <p> 
                Hombre: <input type="checkbox" name="sexo" value="hombre" />
                Mujer: <input type="checkbox" name="sexo" value="mujer" /> 
            </p>
            
            <!-- SELECTOR COLOR -->
            <label for="color"> Color: </label>
            <p> <input type="color" name="color" /></p>
            
            <!-- FECHA -->
            <label for="fecha"> Fecha: </label>
            <p> <input type="date" name="fecha" /> </p>
            
            <!-- EMAIL -->
            <label for="correo"> Email: </label>
            <p> <input type="email" name="correo" /> </p>
            
            <!-- ARCHIVO atributo multiple="multiple" para subir varios archivos-->
            <label for="archivo"> Archivo: </label>
            <p> <input type="file" name="archivo" /> </p>
            
            <!-- NUMERO -->
            <label for="numero"> Numero: </label>
            <p> <input type="number" name="numero" /> </p>
            
            <!-- CONTRASEÑA -->
            <label for="password"> Contraseña: </label>
            <p> <input type="password" name="password" /> </p>
            
            <!-- RADIO BUTTON -->
            <label for="continente"> Continentes: </label>
            <p> 
                America: <input type="radio" name="continente" value="America" />
                Europa: <input type="radio" name="continente" value="Europa" />
                Asia: <input type="radio" name="continente" value="Asia" /> 
            </p>
            
            <!-- URL Paginas Web -->
            <label for="web"> Pagina web: </label>
            <p> <input type="url" name="web" /> </p>
            
            <!-- TELEFONO -->
            <label for="telefono"> Telefono: </label>
            <p> <input type="tel" name="telefono" /> </p>
            
            <!-- AREA DE TEXTO MAS GRANDE -->
            <label for="texto"> Texto: </label>
            <p> <textarea name="texto"></textarea> </p>
            
            <!-- SELECCIONAR EN LISTA -->
            <label for="pelicula"> Peliculas: </label>
            <p> 
                <select name="pelicula">
                    <option value="Spiderman"> Spiderman </option>
                    <option value="Salvar soldado Ryan"> Salvar soldado Ryan </option>
                    <option value="Memento"> Memento </option>
                    <option value="Gladiator"> Gladiator </option>
                </select> 
            </p>
            
            
            <input type="submit"/>
            
        </form>
        
    </body>
</html>
