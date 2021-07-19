<?php

/* 
 * Ejercicio 3. Escribir un programa que imprima por pantalla los cuadrados
 * de los 40 primeros numeros naturales.
 * Utilizar bucle while.
 */


$contador = 0;

echo "<hr> <h2>Cuadrados con bucle WHILE</h2>";

while($contador <= 40){
    
    $cuadrado = $contador * $contador;
    echo "El cuadrado de $contador es $cuadrado <br>";
    $contador++; 
}

echo "<hr>";

echo "<hr> <h2>Cuadrados con bucle FOR</h2>";

for($i = 0; $i <= 40; $i++){
    
    $cuadrado = $i * $i;
    echo "El cuadrado de $i es $cuadrado <br>";
    
}

echo "<hr>";

