<?php

// TODAS ESTAS FUNCIONES PREDEFINIDAS SE PUEDEN MIRAR Y BUSCAR EN EL MANUAL DE PHP.


// Para debuggear o ver el valor de una variable o dato var_dump().
$nombre = "Eduardo Lozano";
echo "<h3>Revision de una variable con var_dump()</h3>";
var_dump($nombre);
echo "<hr>";

// Funcion para la fecha.
echo "<h3>Fecha con la funcion date()</h3>" . date('d-m-y');
echo "<hr>";

// Funcion para la fecha en formato unix.
echo "<h3>Fecha en formato unix que cambia cada segundo con la funcion time()</h3>" . time();
echo "<hr>";

// Funcion para la raiz cuadrada.
echo "<h3>Raiz cuadrada de 10 con la funcion sqrt()</h3>" . sqrt(10);
echo "<hr>";

// Funcion para numero aleatorio.
echo "<h3>Numero aleatorio entre 10 y 40 con la funcion rand()</h3>" . rand(10, 40);
echo "<hr>";

// Funcion para el numero pi.
echo "<h3>Numero pi con la funcion pi()</h3>" . pi();
echo "<hr>";

// Funcion para redondear un numero.
echo "<h3>Funcion para redondear un numero</h3>" . round(pi(), 3);
echo "<hr>";

// Funcion para el tipo de una variable.
echo "<h3> Funcion que indica el tipo de una variable </h3>";
echo gettype($nombre);
echo "<hr>";

// Funcion para comprobar si la variable es algo en concreto.
echo "<h3> Funcion que comprueba si la variable, objeto o fichero es algo concreto con if_---()</h3>";
if(is_string($nombre)){
    echo "La variable nombre es un string<br>";
}
if(!is_float($nombre)){
    echo "La variable nombre no es un float<br>";
}
echo "<hr>";

// Funcion para ver si una variable existe.
echo "<h3> Funcion que comprueba si una variable existe isset()</h3>";
if(isset($edad)){
    echo "La variable edad existe<br>";
} else{
    echo "La variable edad no existe<br>";
}
if(isset($nombre)){
    echo "La variable nombre existe<br>";
} else{
    echo "La variable nombre no existe<br>";
}
echo "<hr>";

// Funcion para limpiar los espacios en blanco de un string.
echo "<h3>Funcion que limpia los espacios de una variable (en login para usuarios y contraseñas) trim()</h3>";
$fraseEspacios = "    mi contenido    ";
echo var_dump($fraseEspacios) . " - con los espacios <br>";
echo var_dump(trim($fraseEspacios)) . " - sin los espacios <br>";
echo "<hr>";

// Funcion para eliminar una variable.
echo "<h3> Para eliminar variables o indices - unset() </h3>";
$year = 2020;
echo $year . "Imprime 2020 porque aun existe. <br>";
unset($year);
echo "Ya esta borrada y daria error intentar imprimirla. <br>";
echo "<hr>";

// Funcion para comprobar si una variable esta vacia.
echo "<h3> Funcion que comprueba si la variable esta vacia o tiene un cero - empty()</h3>";
$textoVacio = "";
if(empty($textoVacio)){
    echo "El textoVacio esta vacio.";
}else{
    echo "El textoVacio tiene contenido.";
}
echo "<hr>";

// Funcion para contar los caracteres de un string.
echo "<h3> Funcion para contar los caracteres de un string. strlen()</h3>";
$cadena = "12345";
echo strlen($cadena);
echo "<hr>";

// Funcion para encontrar un caracter.
echo "<h3> Funcion que muestra la posicion de un caracter en el string. strpos()</h3>";
$fraseCaracter = "La vida es bella";
echo $fraseCaracter . "<br>";
echo "la i esta en la posicion: " . strpos($fraseCaracter, "i") ."<br>";
echo "<hr>";

// Reemplazar palabras en un string.
echo "<h3> Funcion que reemplaza parte de un string. str_replace()</h3>";
echo "Imprimo variable fraseCaracter: " . $fraseCaracter . "<br>";

$fraseCaracter = str_replace("bella", "un camino inescrutable", $fraseCaracter);

echo "Imprimo variable fraseCaracter despues de modificar: " . $fraseCaracter . "<br>";
echo "<hr>";

// Convertir el string a mayusculas o minusculas.
echo "<h3> Funcion que pasa un string a mayusculas o minusculas. strtolower() o strtoupper()</h3>";
echo "La frase en minusculas: " . strtolower($fraseCaracter) . "<br>";
echo "La frase en mayusculas: " . strtoupper($fraseCaracter) . "<br>";
echo "<hr>";
