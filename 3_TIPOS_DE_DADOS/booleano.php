<?php
// filepath: c:\xampp\htdocs\curso_php\3_TIPOS_DE_DADOS\booleano.php

$verdadeiro = true;
$falso = false;

echo "Verdadeiro: " . $verdadeiro . "<br>"; // Imprime 1
echo "Falso: " . $falso . "<br>"; // Não imprime nada

// Usando booleanos em condicionais
if ($verdadeiro) {
    echo "Esta mensagem é exibida porque \$verdadeiro é verdadeiro.<br>";
}

if (!$falso) {
    echo "Esta mensagem é exibida porque \$falso é falso.<br>";
}

// Conversão de outros tipos para booleano
$string_vazia = "";
$numero_zero = 0;
$array_vazio = [];

echo $numero_zero;

echo "String vazia é considerada verdadeira? " . ($string_vazia ? 'Sim' : 'Não') . "<br>"; // Não
echo "Número zero é considerado verdadeiro? " . ($numero_zero ? 'Sim' : 'Não') . "<br>"; // Não
echo "Array vazio é considerado verdadeiro? " . ($array_vazio ? 'Sim' : 'Não') . "<br>";   // Não

$string_nao_vazia = "Algum texto";
$numero_positivo = 10;
$array_com_elementos = [1, 2, 3];

echo "String não vazia é considerada verdadeira? " . ($string_nao_vazia ? 'Sim' : 'Não') . "<br>"; // Sim
echo "Número positivo é considerado verdadeiro? " . ($numero_positivo ? 'Sim' : 'Não') . "<br>"; // Sim
echo "Array com elementos é considerado verdadeiro? " . ($array_com_elementos ? 'Sim' : 'Não') . "<br>"; // Sim

?>