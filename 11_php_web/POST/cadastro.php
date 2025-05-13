<?php

if ($_POST['marca'] && $_POST['preco']) {
    echo "Dados enviados: <br>";
    echo "Marca: {$_POST['marca']} <br>";
    echo "Preco: {$_POST['preco']}";
} elseif (!$_POST['marca']) {
    echo "MARCA NAO PODE SER NULL";
} else {
    echo "preco nao pode ser NULL";
}
