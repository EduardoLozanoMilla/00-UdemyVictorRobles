<?php


// FUNCIONES DE ORDENACION
echo "<h1>Funciones para ordenar arrays</h1>";

$cantantes = ['2pac','Drake', 'Jenifer Lopez', 'Alfredo'];
$numeros = [1,2,5,6,3,10];

echo "<strong> var_dump de cantantes sin ordenar: </strong><br>";
echo var_dump($cantantes) . "<br><br>";

echo "<strong> var_dump de cantantes ordenados alfabeticamente con asort(\$array): </strong><br>";
asort($cantantes);
echo var_dump($cantantes) . "<br><br>";

echo "<strong> var_dump de cantantes ordenados de forma inversa alfabeticamente con arsort(\$array): </strong><br>";
arsort($cantantes);
echo var_dump($cantantes) . "<br><br>";

echo "<strong> var_dump de numeros ordenados con sort(): </strong><br>";
sort($numeros);
echo var_dump($numeros) . "<br><br>";


// FUNCIONES DE ADICION
echo "<h1>Funciones para añadir cosas al array</h1>";

echo "<strong> Con el array con corchetes y un valor lo añade al final \$array[] = 'valor'</strong><br>";
$cantantes[] = "Natos";
$cantantes[] = "Natos";
echo var_dump($cantantes) . "con los 2 Natos agregados. <br><br>";

echo "<strong>Tambien se puede añadir con la funcion array_push()</strong><br>";
array_push($cantantes, "Chenoa");
echo var_dump($cantantes) . "chenoa agregada con array_push() <br><br>";


// FUNCIONES DE ELIMINACION
echo "<strong>Quitar la ultima posicion del array array_pop()</strong><br>";
array_pop($cantantes);
echo var_dump($cantantes) . " deberia quitar a chenoa (el ultimo registro) <br><br>";

echo "<strong>Quitar la posicion del array que le indiquemos con unset(\$cantantes[posicion])</strong><br>";
unset($cantantes[0]);
echo var_dump($cantantes) . " deberia haber eliminado el primero '2pac' <br><br>";


// SACAR UN ELEMENTO ALEATORIO DE UN ARRAY
echo "<strong> Seleccionar un elemento aleatorio con array_rand() -- Esto da la posicion del array no el elemento. </strong><br>";
echo $cantantes[array_rand($cantantes)] . "<br><br>";


// INVERTIR UN ARRAY
echo "<strong> Invertir un array con array_reverse(\$array) </strong><br>";
echo var_dump($cantantes) . " <strong> array normal </strong><br>";
echo var_dump(array_reverse($cantantes)) . " <strong> array invertido </strong><br><br>";

// BUSCAR DENTRO DE UN ARRAY
echo "<strong> Para buscar dentro de un array con array_search() esto nos devuelve el indice en el que se encuentra el valor buscado </strong> <br>";
echo array_search('Alfredo', $cantantes) . "<br><br>";
