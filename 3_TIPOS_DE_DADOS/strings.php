<?php
// filepath: c:\xampp\htdocs\curso_php\3_TIPOS_DE_DADOS\strings.php

$string1 = "Olá, mundo!";
$string2 = 'Esta é outra string.';
$string3 = "Uma string com \"aspas\" dentro.";

echo $string1 . "<br>";
echo $string2 . "<br>";
echo $string3 . "<br>";

// Verifica se as variáveis são strings
echo "string1 é string? " . (is_string($string1) ? 'Sim' : 'Não') . "<br>";
echo "string2 é string? " . (is_string($string2) ? 'Sim' : 'Não') . "<br>";
echo "string3 é string? " . (is_string($string3) ? 'Sim' : 'Não') . "<br>";

echo "TEXTO COM 'ASPAS' DUPLAS" . "<br>";
echo 'TEXTO COM "ASPAS" SIMPLES' . "<br>";


?>