<?php
    
    // OPERADORES ARITMETICOS.

    $numero1 = 55;
    $numero2 = 33;
    
    echo 'Suma: ' . ($numero1+$numero2) . '<br>';
    echo 'Resta: ' . ($numero1-$numero2) . '<br>';
    echo 'Multiplicacion: ' . ($numero1*$numero2) . '<br>';
    echo 'Division: ' . ($numero1/$numero2) . '<br>';
    echo 'Resto: ' . ($numero1%$numero2) . '<br><br><br>';
    
    
    // OPERADORES DE INCREMENTO Y DECREMENTO. TAMBIEN SE PUEDEN PONER DELANTE DE LA VARIABLE.
    
    $year = 2021;
    echo 'Imprimo el año: ' . $year . '<br>';
    
    $year++;
    echo 'Imprimo el año con incremento "++": ' . $year . '<br>';
    $year--;
    echo 'Imprimo el año con decremento "--": ' . $year . '<br><br><br>';
    
    // OPERADORES DE ASIGNACION.
    
    $edad = 55;
    echo 'La edad es ' . $edad . '<br>';
    
    $edad += 5;
    echo 'La edad con un incremento de 5 es: ' . $edad . '<br>';
    
    $edad -= 5;
    echo 'La edad con un decremento de 5 es: ' . $edad . '<br>';
    
    $edad /= 5;
    echo 'La edad dividiendo entre 5 es: ' . $edad . '<br>';
    
    $edad *= 5;
    echo 'La edad multiplicada de nuevo por 5 es: ' . $edad . '<br>';
    
    
?>

