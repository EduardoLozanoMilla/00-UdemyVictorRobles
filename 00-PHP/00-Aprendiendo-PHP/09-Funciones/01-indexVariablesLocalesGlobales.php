<?php

/* 
 * 
 * VARIABLES LOCALES: Son las que se definen dentro de una funcion y solo pueden ser usadas dentro de esa funcion.
 * 
 * 
 * VARIABLES GLOBALES: Se declaran fuera de una funcion y estan disponibles fuera y dentro de las funciones.
 * 
 */



// EJEMPLO 1: Variables globales

echo "<hr> <h2> Variables globales </h2>";
$frase = "Hola manola";

echo $frase;

function holaManola(){
    global $frase;
    
    echo "<h1>$frase</h1>";
    
    $year = 021;
    
    echo "<h1>$year</h1>";
    
    return $frase . " " . $year;
}

$year;

echo holaManola();
echo "<hr>";


// EJEMPLO 2: Funciones en variables.

echo "<hr> <h2> Funciones en variables </h2>";

function buenasDias(){
    return "<h3>Hola! Buenos dias! :)</h3>";
}

function buenasTardes(){
    return "<h3>Hey!! Que tal ha ido la comida??</h3>";
}

function buenasNoches(){
    return "<h3>¿Te vas a dormir ya? Buenas noches!!</h3>";
}

$horario = "buenasNoches";

echo $horario . ".    --Sin los parentesis coge el texto como string. <br>";
echo $horario() . ".    --Con los parentesis coge el texto como el nombre de la funcion y escribe el return de la funcion. <br>";
echo "<hr>";


// EJEMPLO 3: Funciones en variables con GET y con parte fija.

$horarioCambiante = $_GET['horario'];

$miFuncion = "buenas".$horarioCambiante;
echo $miFuncion();
echo "<hr>";
