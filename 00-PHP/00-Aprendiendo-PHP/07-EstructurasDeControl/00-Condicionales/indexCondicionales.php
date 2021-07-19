<?php

/*
 * -- OPERADORES LOGICOS:
 *      || or (o)
 *      && and (y)
 *      ! not (negacion)
 */
/*
 * -- OPERADORES DE COMPARACION:
 *      == igual (2 iguales)
 *      === identico (3 iguales)
 *      != diferente (exclamacion,igual)
 *      <> diferente (menorke, mayorke)
 *      !== no identico (exclamacion, igual, igual)
 *      < menor que
 *      > mayor que
 *      <= menor o igual que ()
 *      >= mayor o igual que 
 */
/*
 * -- CONDICIONAL IF:
 * 
 *          if(condicion){
 *              instrucciones
 *          } else if(condicion) {
 *              otras instrucciones
 *          } else {
 *              otras instrucciones
 *          }
 *          
 */

// EJEMPLO 1:

echo "<hr> <h2> Ejemplo 1 (if) </h2>";

$color = "rojo";

if($color == "rojo"){
    echo 'El color es rojo';
} else {
    echo 'El color NO es rojo';
}
echo "<hr>";

// EJEMPLO 2:

echo "<hr> <h2> Ejemplo 2 (if) </h2>";

$year = 2021;

if($year < 2021){
    echo 'El año es anterior a 2021';
} else {
    echo 'El año es posterior a 2021';
}
echo "<hr>";

// EJEMPLO 3:

echo "<hr> <h2> Ejemplo 3 (if dentro de if) </h2>";

$nombre = 'Eduardo Lozano';
$edad = 29;
$ciudad = 'Madrid';
$continente = 'Europa';
$mayorDeEdad = 18;

if($edad >= $mayorDeEdad){
    echo $nombre . ' es mayor de edad con ' . $edad . ' años. <br>';
    if($continente == 'Europa'){
        echo 'Y ' . $nombre . ' es de ' . $ciudad . '<br>';
    } else {
        echo 'No es europeo';
    }
} else {
    echo $nombre . ' no es mayor de edad porque tiene ' . $edad . ' años. <br>';
}
echo "<hr>";

// EJEMPLO 4 (else if):

echo "<hr> <h2> Ejemplo 4 (else if) </h2>";

$dia = 3;

if($dia == 1){
    echo "Es Lunes";
} else if($dia == 2){
    echo "Es Martes";
} else if($dia == 3){
    echo "Es Miercoles";
} else if($dia == 4){
    echo "Es Jueves";
} else if($dia == 5){
    echo "Es Viernes";
} else if($dia == 6){
    echo "Es Sabado";
} else if($dia == 7){
    echo "Es Domingo";
}
echo "<hr>";

// EJEMPLO 5 (varias comprobaciones en una):

echo "<hr> <h2> Ejemplo 5 (varias comprobaciones en una) <br>";

$edad1 = 18;
$edad2 = 64;
$edadOficial = 20;

if($edadOficial >= $edad1 && $edadOficial <= $edad2){
    echo "Esta en edad de trabajar";
} else {
    echo "No esta en edad de trabajar";
}
echo "<br>";

$pais = "Mexico";

if($pais == "Mexico" || $pais == "España" || $pais == "Colombia"){
    echo "En este pais se habla español";
} else {
    echo "En este pais no se habla español";
}
echo "<hr>";

// EJEMPLO 6 (SWITCH):

echo "<hr> <h2> Ejemplo 6 (SWITCH) </h2>";

$diaSwitch = 4;

switch ($diaSwitch){
    case 1:
        echo "Lunes";
        break;
    case 2:
        echo "Martes";
        break;
    case 3:
        echo "Miercoles";
        break;
    case 4:
        echo "Jueves";
        break;
    case 5:
        echo "Viernes";
        break;
    case 6:
        echo "Sabado";
        break;
    case 7:
        echo "Domingo";
        break;
    default:
        echo "No es ningun dia";
}
echo "<hr>";

// EJEMPLO 7 (GOTO)

echo "<hr> <h2> Ejemplo 7 (GOTO) </h2>";
echo "Se va a saltar 3 instrucciones <br>";
goto marca;
echo "<h3>Instruccion 1</h3>";
echo "<h3>Instruccion 2</h3>";
echo "<h3>Instruccion 3</h3>";

marca:
    echo "Me he saltado 3 instrucciones"
?>
