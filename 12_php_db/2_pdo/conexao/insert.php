<?php

require_once 'conexao.php';

$stmt = $conn->prepare("INSERT INTO users (nome, email) VALUES (:nome, :email)");

$nome = "Walter White";
$email = "walter@gmail.com";

$stmt->bindParam(":nome", $nome);
$stmt->bindParam(":email", $email);

$stmt->execute();

$conn = null;
