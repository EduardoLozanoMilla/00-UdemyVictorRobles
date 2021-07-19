<?php

/* 
 * Ejercicio 7. Hacer un programa que muestre todos los numeros IMPARES entre
 * dos numeros que nos lleguen por URL($_GET).
 */

if(isset($_GET['numero1']) && isset($_GET['numero2'])){
    
    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];
    
    if($numero1 < $numero2){
        
        echo "<h3> Los numeros entre $numero1 y $numero2 son: </h3>";
        
        for($numero1; $numero1 <= $numero2; $numero1++){
            
            if($numero1%2 == 0){
                echo "$numero1 es PAR <br>";
            } else{
                echo "$numero1 es IMPAR <br>";
            }
            
        }
    
    } else if($numero1 > $numero2){
        
        echo "<h3> Los numeros entre $numero2 y $numero1 son: </h3>";
        
        for($numero2; $numero2 <= $numero1; $numero2++){
            
            if($numero2%2 == 0){
                echo "$numero2 es PAR <br>";
            } else{
                echo "$numero2 es IMPAR <br>";
            }
            
        }
    
    } else{
        
        echo "Son el mismo numero.";
        
    }
} else{
    
    echo "<h1> Introduce correctamente los 2 valores por la URL (numero1 y numero2) </h1>";
    echo "<h3> Se escribe ?nombreVariable=valor & ?nombreVariable2=valor.....</h3>";
    
}


