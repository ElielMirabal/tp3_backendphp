<?php
 /* Mostrar los números del 1 al 100 */
    echo "<h1>Ejercicio 1</h1>";
    echo "<p>los numeros del 1 al 100 son:</p>";
    $i=0;
   
    do {
        echo "<p>$i</p>";
        $i++;
    } while ($i <= 100);


/* Mostrar los números del 100 al 1. */
    echo "</br>";
    echo "<h1>Ejercicio 2</h1>";
    echo "<p>los numeros del 100 al 1 son:</p>";
    for ($i2 = 100; $i2 >= 0; $i2--) {
        echo "<p>$i2</p>";
    }


/* Mostrar los números pares del 1 al 100. */
    echo "</br>";
    echo "<h1>Ejercicio 3</h1>";
    echo "<p>los numeros pares del 1 al 100 son:</p>";
    for ($i3 = 0; $i3 <= 100; $i3++) {
        echo "<p>$i3</p>";
        $i3 = $i3 + 1;
    }


/* Mostrar los números impares del 1 al 100. */
    echo "</br>";
    echo "<h1>Ejercicio 4</h1>";
    echo "<p>los numeros impares del 1 al 100 son:</p>";
    for ($i4 = 0; $i4 <= 100; $i4++) {
        echo "<p>$i4</p>";
        $i4 = $i4 + 2;
    }


/* Mostrar la suma de los números de 1 a 20. */
    echo "</br>";
    echo "<h1>Ejercicio 5</h1>";
    echo "<p>los numeros pares del 1 al 20 son:</p>";
    $n=0;
    for ($a=0; $a <= 20; $a++) {
        if (($a%2)==0) {
            $c = $n;
            $n = $n + $a;
            echo "<p>$c + $a = $n</p>";
        }
    }

/* Mostrar la suma de números pares de 1 a 20 */
    echo "</br>";
    echo "<h1>Ejercicio 6</h1>";
    echo "<p>los numeros impares del 1 al 20 son:</p>";
    $n=0;
    for ($a=0; $a <= 20; $a++) {
        if (($a%3)==0) {
            $c = $n;
            $n = $n + $a;
            echo "<p>$c + $a = $n</p>";
        }
    }



 ?>