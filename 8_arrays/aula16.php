<?php

//calcular a diferenca de arrays com array_diff

// O motivo pelo qual o resultado de `$diff2` está retornando vazio é que a função `array_diff` compara os valores do **primeiro array** 
// com os valores de **todos os outros arrays fornecidos**. Se todos os valores do primeiro array (`$arr2`) também estiverem presentes 
// em qualquer um dos outros arrays (`$arr1` ou `$arr3`), o resultado será vazio.

// ### **Como `array_diff` funciona**
// A função `array_diff` retorna os valores do primeiro array que **não estão presentes em nenhum dos outros arrays**.


$arr1 = [1,2,3];
$arr2 = [2,4,6];

$diff = array_diff($arr1, $arr2); // comparando a diferenca do primeiro com o segundo
print_r($diff); // retorna os valores que possui no array 1 e nao no array 2

$arr3 = [4,6];
$diff2 = array_diff($arr2, $arr1, $arr3); // compara a diferenca do array 2 com o array 1 e array 3;
print_r($diff2); // 