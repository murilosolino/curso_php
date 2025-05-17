<?php

require_once 'conexao.php';

$stmt = $conn->prepare("UPDATE users SET nome = :nome, email = :email WHERE id = :id");

$nome = "Jesse Pinkman";
$email = "jp@gmail.com";
$id = 8;

$stmt->bindParam(":nome", $nome);
$stmt->bindParam(":email", $email);
$stmt->bindParam(":id", $id);

$stmt->execute();

$conn = null;
