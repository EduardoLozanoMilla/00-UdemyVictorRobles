<?php

/* 
 *  Crea un script en PHP que tenga 4 variables, una de tipo array, otra de tipo
 *  string, otra int, y otra booleana. Tiene que imprimir un mensaje segun el tipo
 *  de variable que sea.
 */

$array = [];
$numero = 4;
$texto = "Esto es un string";
$boolean = true;

// Comprobamos el array
if(is_array($array)){
    echo "La variable es un array.<br>";
}else{
    echo "La variable no es un array. <br>";
}

//Comprobamos el string
if(is_string($texto)){
    echo "La variable es un string.<br>";
}else{
    echo "La variable no es un string. <br>";
}

//Comprobamos el int
if(is_int($numero)){
    echo "La variable es un int.<br>";
}else{
    echo "La variable no es un int. <br>";
}

//Comprobamos el boolean
if(is_bool($boolean)){
    echo "La variable es un boolean.<br>";
}else{
    echo "La variable no es un boolean. <br>";
}

