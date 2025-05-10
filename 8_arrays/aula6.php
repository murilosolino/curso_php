<?php

//divindo um  array em partes menores de mesmo tamanho com array_chunk
// array_chunck retorna uma matriz.

$arr = range(1,20);
print_r(array_chunk($arr, 4));