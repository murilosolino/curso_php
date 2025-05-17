<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {
    $conn = new mysqli("localhost", "root", "", "cursophp");
    echo "Conexao realizada com sucesso:" . $conn->get_server_info();
} catch (mysqli_sql_exception $e) {
    echo "Erro ao conectar com o banco de dados: " . $e->getMessage();
}
