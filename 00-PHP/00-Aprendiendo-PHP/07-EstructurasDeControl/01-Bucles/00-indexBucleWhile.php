<?php
    
    /*
     *  BUCLE WHILE:
     *      Estructura de control que itera o repite la ejecucion de una serie de instrucciones en base a la condicion que pongamos.
     * 
     *      while(condicion){
     *          bloque de instrucciones
     *      }
     *  BUCLE DO WHILE:
     *      do{
     *          bloque de instrucciones
     *      } while(condicion)
     */


// EJEMPLO 1: WHILE

echo "<hr> <h2> Ejemplo 1 (WHILE) </h2>";
$numero = 0;
echo "<p>Vamos a poner coma mientras que el numero no sea un 10</p>";

while($numero <= 10){
    
    echo "$numero";
    if($numero != 10){
        echo ", ";
    }
    $numero++;
}
echo "<hr>";


// EJEMPLO 2 (GET):

echo "<hr> <h2> Ejemplo 2 (IF que recibe GET) </h2>";
echo "<h3> Al no comprobar con isset, si no recibimos la variable da error. Si la recibimos funciona.</h3>";
$numeroGet;

if($_GET['numeroGet']){
    $numeroGet = $_GET['numeroGet'];
    echo "El numero ha venido por GET y es el: " . $numeroGet . "<>";
} else{
    $numeroGet = 1;
    echo "NO hemos recibido el numero por Get y asignamos el " . $numeroGet . " a la variable. <br>";
}
var_dump($numeroGet);
echo "<hr>";


// EJEMPLO 3 (WHILE Y GET):

echo "<hr> <h2> Ejemplo 3 (Comprobamos si llega la variable con 'isset') </h2>";
echo "<h3>Hacemos comprobacion pasando la variable por la URL \$numero=33</h3>";
echo "<h3>Tenemos que castear la variable recibida a traves del GET porque es un string, la casteamos a un int</h3>";

$numeroIsset;

if(isset($_GET['numeroIsset'])){
    // Casteo cambio del tipo de dato.
    $numeroIsset = (int)$_GET['numeroIsset'];
    echo "Estamos recibiendo el numero por el GET de la URL " . $numeroIsset;
} else{
    $numeroIsset = 1;
    echo "NO hemos recibido la variable por el GET de la URL <br>";
}

echo "<h2>Tabla de multiplicar del numero $numeroIsset</h2>";

$contador = 1;

while($contador <= 10){
    echo "$numeroIsset x $contador = " . ($numeroIsset*$contador) . "<br>";
    $contador++;
}
echo "<hr>";


// EJEMPLO 4 (DO WHILE):

echo "<hr> <h2> Ejemplo 4 (Bucle DO_WHILE) </h2>";

$edad = 17;
$contador = 1;

echo "Al ser un bucle do while que no cumple la condicion, solo entra en la primera iteraccion. <br>";

do{
    echo "Tienes acceso al local privado $contador <br>";
    $contador++;
} while($edad >= 18 && $contador <= 10);
echo "<hr>";



?>

