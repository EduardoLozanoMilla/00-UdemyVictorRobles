<?php

/* 
 *  Ejercicio 2. Escribir un programa con PHP que añada valores a un array 
 *  mientras su longitud sea menor que 120 y luego mostrarlo por pantalla.
 */

$coleccion = array();

for($i = 0; $i <= 120; $i++){
    array_push($coleccion, "Elemento-$i");
    echo $coleccion[$i] . "<br>";
}
