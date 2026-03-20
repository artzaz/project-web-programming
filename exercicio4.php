<?php
// Exercise 4: Currency Converter
$valorReais = 500; // Test data (fixed value)
$cotacaoDolar = 5.00; // Test data (fixed value)

// Convert to USD
$valorUSD = $valorReais / $cotacaoDolar;

// Determine fee based on converted value
if ($valorUSD < 100) {
    $taxa = 0.10;
} elseif ($valorUSD <= 300) {
    $taxa = 0.05;
} else {
    $taxa = 0.00;
}

// Calculate final value with fee
$valorComTaxa = $valorUSD * (1 + $taxa);

// Display results
echo "Valor em Reais: R$ " . number_format($valorReais, 2, ',', '.') . "<br>";
echo "Cotação do Dólar: R$ " . number_format($cotacaoDolar, 2, ',', '.') . "<br>";
echo "Valor sem taxa: USD " . number_format($valorUSD, 2, '.', ',') . "<br>";
echo "Taxa aplicada: " . ($taxa * 100) . "%<br>";
echo "Valor com taxa: USD " . number_format($valorComTaxa, 2, '.', ',') . "<br>";
?>