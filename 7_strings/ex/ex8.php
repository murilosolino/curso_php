<?php
//encontrando a ultima ocorrencia de uma string em strings com strrpos

$str = "Estamos testando o metodo strrpos, queremos encontrar a ultima palavra teste nesta string que possui mais de um teste";

$testeEncontrar = strrpos($str, "teste");

echo "primeira ocorrencia de strpos encontrado no indice: $testeEncontrar \n";

$testeEncontrar2 = strrpos($str, "Java");

if (!$testeEncontrar2){
    echo "Java nao foi encontrado na string original\n";
}

//extraindo uma substring com strrpos

$teste = substr($str, strrpos($str, "teste"), 5);
echo $teste;