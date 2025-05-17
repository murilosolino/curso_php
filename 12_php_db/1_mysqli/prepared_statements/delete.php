<?php

require_once __DIR__ . '/../conexao/index.php';

try {
    $stmt = $conn->prepare('DELETE FROM users WHERE id = ?');

    $id = 7;

    $stmt->bind_param("i", $id);

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
