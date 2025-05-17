<?php

require_once 'conexao.php';

$stmt = $conn->prepare("SELECT * FROM users");

$stmt->execute();

$item = $stmt->fetch(PDO::FETCH_ASSOC);
print_r($item);
echo "<br>";

$itens = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($itens as $item) {
    // Supondo que sua tabela tenha as colunas 'id', 'nome' e 'email'
    echo "ID: " . $item['id'] . "<br>";
    echo "Nome: " . $item['nome'] . "<br>";
    echo "Email: " . $item['email'] . "<br>";
    echo "<hr>";
}

$conn = null;
