<?php

/* 
 * Ejercicio 4. Recoger dos numeros por la URL (parametros GET) y hacer todas
 * las operaciones basicas de una calculadora (suma, resta, multiplicacion y division)
 * de los dos numeros recogidos.
 */

if(isset($_GET['numero1']) && isset($_GET['numero2'])){
    
    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];
    
    echo "Suma: $numero1 + $numero2 = " . ($numero1 + $numero2) . " <br>";
    echo "Resta: $numero1 - $numero2 = " . ($numero1 - $numero2) . " <br>";
    echo "Multiplicacion: $numero1 * $numero2 = " . ($numero1 * $numero2) . " <br>";
    echo "Division: $numero1 / $numero2 = " . ($numero1 / $numero2) . " <br>";
    
} else{
    
    echo "<h1> Introduce correctamente los 2 valores por la URL (numero1 y numero2) </h1>";
    echo "<h3> Se escribe ?nombreVariable=valor & ?nombreVariable2=valor.....</h3>";
    
}


