<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {
    $conn = new mysqli("localhost", "root", "", "cursophp");
} catch (mysqli_sql_exception $e) {
    die("Erro ao conectar com o banco de dados: " . $e->getMessage());
}
