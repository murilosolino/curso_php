<?php

$arr = range(10,45);

foreach ($arr as $num) {
    $num += 6;
    if($num > 30){
        echo "\nNumero $num eh maior que 30\n";
    } else {
        echo $num . ", ";
    }
}