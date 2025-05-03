<?php
// filepath: c:\xampp\htdocs\curso_php\4_VARIAVEIS\escopoLocal.php

// Variável global
$y = 20;

function escopoLocal() {
    // Variável local
    $x = 10;
    echo "Valor de x dentro da função: " . $x . "<br>";

    // Acessando a variável global dentro da função usando 'global'
    global $y;
    echo "Valor de y dentro da função (global): " . $y . "<br>";

    // Modificando a variável global dentro da função
    $y = 30;
    echo "Valor de y dentro da função (modificado): " . $y . "<br>";
}

escopoLocal();

echo "Valor de y fora da função (global): " . $y . "<br>"; // Imprime 30 (modificado pela função)

// Tentando acessar a variável local fora da função (gera um erro)
// echo "Valor de x fora da função: " . $x; // Isso causaria um erro

?>