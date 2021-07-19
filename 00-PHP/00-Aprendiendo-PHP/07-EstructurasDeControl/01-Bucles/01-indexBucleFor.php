<?php
    /*
     *  BUCLE FOR:
     *      for(cariable contador; condicion; incremento contador){
     *          instrucciones
     *      }
     */


// EJEMPLO 1: BUCLE FOR
echo "<hr> <h2> Ejemplo 1 (FOR) </h2>";
    $resultado = 0;
    for($i = 0; $i <= 100; $i++){
        $resultado = $resultado + $i;
    }
    echo "El resultado es: $resultado";
echo "<hr>";


// EJEMPLO 2: TABLA DE MULTIPLICAR
echo "<hr> <h2> Ejemplo 2 (FOR Tabla multiplicar) </h2>";

$numeroFor = 0;

if(isset($_GET)){
    $numeroFor = (int)$_GET['numeroFor'];
} else{
    $numeroFor = 1;
    echo "Sacamos la tabla del 1 porque no ha venido numero por el GET";
}

echo "Tabla de multiplicar del numero " . $numeroFor . "<br>";

for($contador = 1; $contador <= 10; $contador++){
    echo "$numeroFor x $contador = " . ($numeroFor*$contador) . " <br>";
}
echo "<hr>";


// EJEMPLO 3: FOR CON BREAK

echo "<hr> <h2> Ejemplo 3 (FOR CON BREAK) </h2>";

$numeroFor = 0;

if(isset($_GET)){
    $numeroFor = (int)$_GET['numeroFor'];
} else{
    $numeroFor = 1;
    echo "Sacamos la tabla del 1 porque no ha venido numero por el GET";
}

echo "Tabla de multiplicar del numero " . $numeroFor . " con BREAK si es del numero del Diablo (666). <br>";

for($contador = 1; $contador <= 10; $contador++){
    if($numeroFor == 666){
        echo "<h3> No se puede hacer la tabla del numero del Diablo!! </h3>";
        break;
    }
    echo "$numeroFor x $contador = " . ($numeroFor*$contador) . " <br>";
}
echo "<hr>";


?>

