<?php
// explode -> string para array
$string = "carro - navio - helicoptero - barco - jangada";
$arr = explode(" - ", $string);

foreach($arr as $i){
    print("$i\n");
}

print_r($arr);