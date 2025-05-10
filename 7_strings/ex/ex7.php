<?php

//encontrando a primeira ocorrencia de uma string em strings

$str = "Estamos testando o metodo strpos, com strpos podemos encontrar strings";

$testeEncontrar = strpos($str, "strpos");

echo "primeira ocorrencia de strpos encontrado no indice: $testeEncontrar \n";

$testeEncontrar2 = strpos($str, "Java");

if (!$testeEncontrar2){
    echo "Java nao foi encontrado na string original";
}