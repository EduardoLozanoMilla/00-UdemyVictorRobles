<?php

/* 
 *  Ejercicio 1. Hacer un programa en PHP que tenga un array con 8 numeros enteros
 *  y que haga lo siguiente:
 *      a - Recorrerlo y mostrarlo.
 *      b - Ordenarlo y mostrarlo.
 *      c - Mostrar su longitud.
 *      d - Buscar algun elemento.     
 */

$arrayNumeros = [10,9,3,4,5,6,7,8,2,1];


function mostrarArray($arrayNumeros){
    $resultado = "";
    
    foreach($arrayNumeros as $numero){
        $resultado .= $numero . " ";
    }
    
    return $resultado;
}


// Recorrer y mostrar array.
echo "<h2> Recorrer y mostrar el arrayNumeros</h2>";
for($i = 0; $i < count($arrayNumeros); $i++){
    echo $arrayNumeros[$i] . " ";
}
echo "<hr>";


// Ordenarlo y mostrarlo ordenado.
echo "<h2> Ordenarlo y mostrarlo sort()</h2>";
sort($arrayNumeros);
echo mostrarArray($arrayNumeros);
echo "<hr>";


// Mostrar la longitud del array.
echo "<h2>Mostrar la longitud del array count()</h2>";
echo "La longitud del array es " . count($arrayNumeros);
echo "<hr>";


// Buscar en el array
echo "<h2>Buscar en el array el numero determinado, almacenando la busqueda en una variable y checkeando si luego esa variable existe o no<h2>";

if(isset($_GET['numeroBuscado'])){
    
    $numeroBuscado = $_GET['numeroBuscado'];
    $busqueda = array_search($numeroBuscado, $arrayNumeros);
    
    echo "<h3> El numero 1 pone que no existe. El problema esta en la primera posicion del array la 0 es como si no la viese</h3>";
    
    if(!empty($busqueda)){
        echo "Existe el numero buscado ($numeroBuscado) en la posicion $busqueda.<br>";
    }else{
        echo "No existe el numero buscado ($numeroBuscado) en ninguna posicion del array.<br>";
    }
    echo "<hr>";
}else{
    echo "<h2>Tienes que introducir el valor por URL a la variable 'numeroBuscado'<h2>";
    echo "<hr>";
}