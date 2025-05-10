<?php

//count -> metodo que retorna o numero de elementos de um array
$array = range(1,7);
$tamanhoArr = count($array);
echo $tamanhoArr . "\n";

//count tmabem pode ser usado com arrays associativos
$arrAssoc = [
    "nome" => "pedro",
    "idade" => 34
];

$tamanhoArrAssoc = count($arrAssoc);
echo $tamanhoArrAssoc;