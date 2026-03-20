<?php
// Exercise 2: Sports Classification System
$idade = 25; // Test data (fixed value)

if ($idade < 0) {
    echo "Idade inválida.";
} elseif ($idade < 12) {
    echo "Infantil";
} elseif ($idade < 18) {
    echo "Juvenil";
} elseif ($idade < 30) {
    echo "Sub-30";
} elseif ($idade < 40) {
    echo "Sub-40";
} else {
    echo "Veterano";
}
?>