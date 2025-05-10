<?php

//resgatando e removendo elementos de um array a partir de array_splice

$arr = range(1,10);

$removidos = array_splice($arr, 2, 4);

print_r($arr);
print_r($removidos);
/**
 * Array -> removidos
 *   [0] => 3
 *   [1] => 4
 *   [2] => 5
 *   [3] => 6
 *  */

 $arr2 = range(1,10);
 $removidos2 = array_splice($arr, 4); //remove da posicao 4 para frente.

 print_r($removidos2);
// Array -> removidos2
// (
//     [0] => 5
//     [1] => 6
//     [2] => 7
//     [3] => 8
//     [4] => 9
//     [5] => 10
// )