<?php

require_once __DIR__ . '/../conexao/index.php';

$nome = "Carl Jones";
$email = "carl@yahoo.com";

$stmt = $conn->prepare("INSERT INTO Users (nome, email) VALUES (?,?)");

$stmt->bind_param("ss", $nome, $email);

$stmt->execute();

$conn->close();
