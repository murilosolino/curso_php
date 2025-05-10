<?php

$str = "O rato roeu a rouba do rei de Roma";
$count  = 0;

for ($i=0; $i < strlen($str) ; $i++) { 
    if($str[$i] === 'a'){
        $count++;
    }
}

print($count);