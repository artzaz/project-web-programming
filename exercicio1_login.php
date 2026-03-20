<?php
// Exercise 1: Simple Login System
$usuarioCorreto = "admin";
$senhaCorreta = "1234";

// Test data (fixed values as per instructions)
$usuarioFornecido = "admin";
$senhaFornecida = "1234";

// Check credentials
$usuarioValido = ($usuarioFornecido === $usuarioCorreto);
$senhaValida = ($senhaFornecida === $senhaCorreta);

if ($usuarioValido && $senhaValida) {
    echo "Acesso concedido";
} elseif (!$usuarioValido && !$senhaValida) {
    echo "Usuário e senha incorretos";
} elseif (!$usuarioValido) {
    echo "Usuário incorreto";
} else {
    echo "Senha incorreta";
}
?>