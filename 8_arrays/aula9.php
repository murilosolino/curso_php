<?php

//reduce -> reduz o array a um único valor a partir de uma função callback
$arr = range(1,10);

function soma($a, $b){
    return $a + $b;
}

$result = array_reduce($arr, "soma");
echo $result;
