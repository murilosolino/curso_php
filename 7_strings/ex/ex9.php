<?php

// metodo strstr -> retorna o restante de uma string a partir de um determinado ponto;
// indeitifica a primeira ocorrencia do parametro na string
// caso nao encontre retorna false

$str = "Testando o resto da string, pra ver se da certo";

echo strstr($str, "resto") . "\n";
echo strstr($str, "X") . "\n";