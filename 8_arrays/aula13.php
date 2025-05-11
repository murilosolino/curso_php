<?php

//invertendo array

$arr = [1,2,3,4,5];
print_r($arr);

//array_reverse nao altera a estrutura original como as funcoes de sort. 
//No lugar ele retorna um novo array
//Por este motivo seu resultado deve ser atribuido em uma variavel

$arrRev = array_reverse($arr);
print_r($arrRev);

$arr2 = ["abcde", 10, true, "as", false, [1,2,3]];
$arrRev2 = array_reverse($arr2);
print_r($arrRev2);