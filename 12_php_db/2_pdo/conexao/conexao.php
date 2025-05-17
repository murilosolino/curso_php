<?php

try {
    $conn = new PDO("mysql:host=localhost;dbname=cursophp", "root", "");
    echo "Conectado com sucesso!";
} catch (PDOException $e) {
    echo "Erro de conexão: " . $e->getMessage();
}
