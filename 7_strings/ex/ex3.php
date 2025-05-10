<?php

function formmatString($string){
    $str = ucfirst($string);// converte em maiusculo apenas a primeira letra da String
    $arr = explode(" ", $str);

    $arr[count($arr) - 1] = strtoupper($arr[count($arr) - 1]);

    return implode(" ", $arr);   
}

$string = "qualquer string aletatoria aqui";

$result = formmatString($string);
echo $result;