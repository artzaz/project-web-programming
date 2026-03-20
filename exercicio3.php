<?php
// Exercise 3: Factorial Calculator
$n = 5; // Test data (fixed value)

if ($n < 0) {
    echo "Fatorial não definido para números negativos.";
} elseif ($n == 0) {
    echo "0! = 1";
} else {
    $resultado = 1;
    $calculo = "";
    
    for ($i = $n; $i >= 1; $i--) {
        $resultado *= $i;
        if ($i == $n) {
            $calculo .= $i;
        } else {
            $calculo .= " x " . $i;
        }
    }
    
    echo "$n! = $calculo = $resultado";
}
?>