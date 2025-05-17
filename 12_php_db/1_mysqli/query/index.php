<?php

require_once __DIR__ . '/../conexao/index.php';

//executando uma query
//$sql = "INSERT INTO Users (nome, email) VALUES ('Bob Brown', 'bob@gmail.com')";

$sql = "SELECT * FROM Users";

$result = $conn->query($sql);


//um resultado
$itens = $result->fetch_assoc();
print_r($itens);

//todos os resultados
$itens = $result->fetch_all();
print_r($itens);



$conn->close();
