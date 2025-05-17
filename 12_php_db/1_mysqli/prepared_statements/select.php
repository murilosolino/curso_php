<?php

require_once __DIR__ . '/../conexao/index.php';


$id = 2;

$stmt = $conn->prepare("SELECT * FROM Users WHERE id > ?");

$stmt->bind_param('i', $id);
$stmt->execute();
$result = $stmt->get_result();

print_r($result->fetch_all());

$conn->close();
