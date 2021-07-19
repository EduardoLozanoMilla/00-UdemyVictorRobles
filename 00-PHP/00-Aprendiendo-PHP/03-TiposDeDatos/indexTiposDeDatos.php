<?php
    /*
     * TIPOS DE DATOS:
     * - Entero (int/integer) = 99
     * - Coma flotante o decimales (float/double) = 3.45
     * - Cadena (string) = "hola yo soy un string"
     * - Boleano (bool) = true false
     * - null
     * - Array (Coleccion de datos)
     * - Objetos
     */

     // Parte 1 -- Declaracion y obtencion del tipo.

     $numero = 100;
     $decimal = 27.9;
     $texto = "soy un texto";
     $verdadero = true;
     $falso = false;
     $nula=null;
     
     echo gettype($numero)."<br>";
     echo gettype($decimal)."<br>";
     echo gettype($texto)."<br>";
     echo gettype($verdadero) . $verdadero."<br>";
     echo gettype($falso) . $falso."<br>";
     echo gettype($nula)."<br>";
     
     echo "<br>";
     
     
     // Parte 2 -- Debugear variable y debugear array.
     
     $miNombre = "Eduardo Lozano Milla";
     var_dump($miNombre);
     
     echo "<br>";
     
     $arrayNombres[] = "Eduardo";
     $arrayNombres[] = "Esteban";
     $arrayNombres[] = "Piedra";
     $arrayNombres[] = "Sergio";
     
     var_dump($arrayNombres);
     
     
     // Parte 3 -- Variables en string y simbolos raros. (Recomendable usar comillas simples y concatenar con puntos).
     
     $frase = 'Hola manola ' . $texto;
     echo "<br>";
     echo $frase;
     
?>

