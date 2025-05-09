<?php

function arrayMaiorQueSete($arr) {

    $newArr = [];
    foreach($arr as $number){
        if($number > 7){
            $newArr[] = $number;
        }
    }

    return $newArr;

}


$arr = [10,20,30,5,4,3,6,99, 423];
$result = arrayMaiorQueSete($arr);
echo print_r($result);
