<?php

require_once __DIR__ . '/../conexao/index.php';

try {
    $stmt = $conn->prepare('UPDATE users SET nome = ?, email = ? WHERE id = ?');

    $nome = "Tony Stark";
    $email = "tony@avengers.com";
    $id = 7;

    $stmt->bind_param("ssi", $nome, $email, $id);

    $stmt->execute();

    if ($stmt->affected_rows <= 0) {
        echo "Nenhum registro modidifcado. Linhas afetadas: " . $stmt->affected_rows;
    } else {
        echo "Linhas afetadas: " . $stmt->affected_rows;
    }

    $conn->close();
} catch (mysqli_sql_exception $e) {
    echo "Error ao realizar UPDATE: " . $e->getMessage();
}
