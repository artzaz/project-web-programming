<?php
// Exercise 5: Shipping Cost Calculator
$peso = 25; // Test data (fixed value)
$distancia = 150; // Test data (fixed value)

if ($peso <= 0 || $distancia <= 0) {
    echo "Valores inválidos. Insira números maiores que zero.";
} else {
    // Determine base cost per km based on weight
    if ($peso <= 10) {
        $custoPorKm = 1.20;
    } elseif ($peso <= 30) {
        $custoPorKm = 2.00;
    } else {
        $custoPorKm = 3.00;
    }
    
    // Calculate total shipping cost
    $custoTotal = $peso * $distancia;
    $custoTotal = $custoPorKm * $distancia;
    
    echo "Peso: " . number_format($peso, 2, ',', '.') . " kg<br>";
    echo "Distância: " . number_format($distancia, 2, ',', '.') . " km<br>";
    echo "Custo por km: R$ " . number_format($custoPorKm, 2, ',', '.') . "<br>";
    echo "Valor total do frete: R$ " . number_format($custoTotal, 2, ',', '.') . "<br>";
}
?>