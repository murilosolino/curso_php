<?php

//ordenacao de arrays

$arr = [2,4,6,3,65,12,64,2,12,14,41];

//ordem crescente;
sort($arr);
print_r($arr);

//ordem decrescente;
rsort($arr);
print_r($arr);

$arr2 = ['teste', 10, 524.4, "abcder", 'r', 'a'];

sort($arr2);
print_r($arr2);

