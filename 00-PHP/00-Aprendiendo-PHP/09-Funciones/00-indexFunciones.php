<?php

/* 
 * FUNCIONES: Conjunto de instrucciones agrupadas bajo un nombre concreto y que
 * pueden reutilizarse solamente invocando el nombre de la funcion tantas veces 
 * como quieras.
 * 
 * DECLARACION:
 *      function nombreFuncion($parametro){
 *          Instrucciones;
 *      }
 *
 * INVOCACION:
 *      nombreFuncion($mi_parametro);
 */


// EJEMPLO 1:

echo "<hr> <h2> Declaramos una funcion y la ejecutamos 2 veces. </h2>";

    // Declaramos funcion.

function muestraNombres(){
    echo "Eduardo Lozano Milla <br>";
    echo "Javier Piedra Moreno <br><br>";
}

    // Invocamos funcion.
    muestraNombres();
    muestraNombres();
    
echo "<hr>";


// EJEMPLO 2:

echo "<hr> <h2> Tabla de multiplicar del numero que pasemos a la funcion. </h2>";

function tablaMultiplicar($numero){
    
    echo "La tabla de multiplicar del numero $numero es: <br>";
    
    for($i = 1; $i <= 10; $i++){
        echo "$numero x $i = " . ($numero*$i) . "<br>";
    }
}

if(isset($_GET['numero'])){
    tablaMultiplicar($_GET['numero']);
} else{
    echo "Tienes que introducir un valor por URL a la variable numero";
}

echo "<hr>";

// EJEMPLO 3: Calculadora

echo "<hr> <h2> Calculadora con funcion que recibe 2 parametros. </h2>";

function calculadora($numero1, $numero2){
    
    $suma = $numero1 + $numero2;
    $resta = $numero1 - $numero2;
    $multiplicacion = $numero1 * $numero2;
    $division = $numero1 / $numero2;
    
    
    echo "Suma de $numero1 y $numero2 = $suma <br>";
    echo "Resta de $numero1 y $numero2 = $resta <br>";
    echo "Multiplicacion de $numero1 y $numero2 = $multiplicacion <br>";
    echo "Division de $numero1 y $numero2 = $division <br><br>";
}

calculadora(11, 11);
calculadora(22, 22);
calculadora(33, 33);

echo "<hr>";

// EJEMPLO 4: Calculadora con parametro opcional en funcion

echo "<hr> <h2> Calculadora con funcion que recibe 2 parametros y uno opcional que indica con negrita o sin negrita. </h2>";

function calculadoraOpcional($numero1, $numero2, $opcional = false){
    
    $suma = $numero1 + $numero2;
    $resta = $numero1 - $numero2;
    $multiplicacion = $numero1 * $numero2;
    $division = $numero1 / $numero2;
    
    if($opcional == false){
        
    } else{
        echo "<h3>";
    }
    
    echo "Suma de $numero1 y $numero2 = $suma <br>";
    echo "Resta de $numero1 y $numero2 = $resta <br>";
    echo "Multiplicacion de $numero1 y $numero2 = $multiplicacion <br>";
    echo "Division de $numero1 y $numero2 = $division <br><br>";
    
    if($opcional == false){
        
    } else{
        echo "</h3>";
    }
}

calculadoraOpcional(11, 11, true);
calculadoraOpcional(22, 22, false);
calculadoraOpcional(33, 33);

echo "<hr>";


// EJEMPLO 5: Calculadora con parametro opcional en funcion que tiene un return con la informacion deseada.

echo "<hr> <h2> Calculadora con funcion que recibe 2 parametros y uno opcional y que devuelve con return la informacion deseada. </h2>";

function calculadoraReturn($numero1, $numero2, $opcional = false){
    
    $suma = $numero1 + $numero2;
    $resta = $numero1 - $numero2;
    $multiplicacion = $numero1 * $numero2;
    $division = $numero1 / $numero2;
    
    $cadenaTexto = "";
    
    if($opcional == false){
        
    } else{
        $cadenaTexto .= "<h3>";
    }
    
    $cadenaTexto .= "Suma de $numero1 y $numero2 = $suma <br>";
    $cadenaTexto .= "Resta de $numero1 y $numero2 = $resta <br>";
    $cadenaTexto .= "Multiplicacion de $numero1 y $numero2 = $multiplicacion <br>";
    $cadenaTexto .= "Division de $numero1 y $numero2 = $division <br><br>";
    
    if($opcional == false){
        
    } else{
        $cadenaTexto .= "</h3>";
    }
    
    return $cadenaTexto;
}

echo calculadoraReturn(11, 11, true);
echo calculadoraReturn(22, 22, false);
echo calculadoraReturn(33, 33);

echo "<hr>";


// EJEMPLO 5: Funcion dentro de otra funcion.

echo "<hr> <h2> Funcion dentro de otra. </h2>";

function getNombre($nombre){
    $textoNombre = "El nombre es: $nombre";
    return $textoNombre;
}

function getApellidos($apellidos){
    $textoApellidos = "Los apellidos son: $apellidos";
    return $textoApellidos;
}

function devuelveNombre($nombre, $apellidos){
    $texto = getNombre($nombre)
        . "<br>" .
        getApellidos($apellidos);
    
    return $texto;
}

echo devuelveNombre("Eduardo", "Lozano Milla");

echo "<hr>";



