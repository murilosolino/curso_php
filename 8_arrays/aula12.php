<?php

//ordenando arrays associativos

$notas = [
    "João" => 7,
    "Maria" => 9,
    "José" => 5,
    "Ana" => 10
];

//para ordenar por valores podemos ultilizar a funcao asort para ordem crescente
echo "ORDENANDO POR VALORES \n";
asort($notas);
print_r($notas);

//para ordem inversa: arsort

//para ordenar por chaves podemos ulitlizar a funcao ksort
echo "ORDENANDO POR CHAVES \n";
ksort($notas);
print_r($notas);

//para ordem inversa: krsort;