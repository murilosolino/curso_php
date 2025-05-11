<?php

//embaralhando um array de forma aleatoria com shuff
//shuf altera a estrutura original do array

$arr = range(1,20);
shuffle($arr);

print_r($arr);