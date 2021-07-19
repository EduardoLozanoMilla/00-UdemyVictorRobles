<?php

/* 
 * ARRAYS -> Es una coleccion o conjunto de datos/valores bajo un unico nombre.
 * Para acceder a esos valores se usa un indice numerico o alfa numerico.
 */ 

$pelicula = "Batman";

$peliculas = array('Batman', 'Spiderman', 'El señor de los anillos');
$cantantes = ['2pac', 'Drake', 'Eminem'];

var_dump($peliculas);
echo "<br>";
var_dump($cantantes);


// Recorrer el array con bucle FOR.
echo "<h1>Listado de peliculas</h1>";

echo "<ul>";

for($i = 0; $i < count($peliculas); $i++){
    echo "<li>" . $peliculas[$i] . "</li>";
}

echo "</ul>";
echo "<hr>";


// Recorremos array cantante con FOREACH.

echo "<h1>Listado de cantantes</h1>";
echo "<ul>";

foreach($cantantes as $cantante){
    echo "<li>" . $cantante . "</li>";
}

echo "</ul>";
echo "<hr>";


// ARRAY ASOCIATIVO
// $_GET devuelve todas las variables que pongas en la URL como un array asociativo.

echo "<h1>Array asociativo de personas</h1>";

$personas = array(
    'nombre' => 'Eduardo',
    'apellidos' => 'Lozano Milla',
    'web' => 'eduardolozanoweb.es'
);

var_dump($personas);
echo "<br>";

echo $personas['apellidos'];
echo "<hr>";


// ARRAY MULTIDIMENSIONAL

echo "<h1>Array Multidimensional de contactos</h1>";

$contactos = array(
    array(
        'nombre' => 'Eduardo',
        'email' => 'lozano.milla.eduardo@gmail.com'
    ),
    array(
        'nombre' => 'Alvaro',
        'email' => 'minibjulandron@gmail.com'
    ),
    array(
        'nombre' => 'Sergio',
        'email' => 'budy91@gmail.com'
    )
);

var_dump($contactos);
echo "<br><br>";
echo "Imprimimos el segundo contacto del array, su atributo email (\$contactos[1]['email']): <br>" . $contactos[1]['email'] . "<br>";

echo "<br> Imprimimos el var_dump de cada contacto recorriendo el array con un foreach <br>";
foreach($contactos as $key => $contacto){
    echo var_dump($contacto) . "<br>";
}

echo "<br> Imprimimos el var_dump['nombre'] de cada contacto recorriendo el array con un foreach <br>";
foreach($contactos as $key => $contacto){
    echo var_dump($contacto['nombre']) . "<br>";
}