<?php

$mat = [
    [0,1,2],
    [3,4,5],
    [6,7,8]
];

for($i = 0; $i < count($mat); $i++){
    for($j = 0; $j < count($mat[$i]); $j++){
        echo $mat[$i][$j] . ", ";
    }
    echo "\n mudando para o proximo array \n";
}