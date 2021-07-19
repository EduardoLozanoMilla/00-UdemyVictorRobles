<?php

/* 
 *  Ejercicio 3. Programa que compruebe si una variable esta vacia, y rellenarla con texto
 *  en minusculas y mostrarlo en mayusculas y negrita.
 */

$texto = "";

if(empty($texto)){
    $texto = "Hola soy el relleno de la variable texto";
    
    $textoMayusculas = strtoupper($texto);
    
    echo "<strong> $textoMayusculas </strong>";
}else{
    echo "La variable tiene este contenido dentro:<br> $texto";
}