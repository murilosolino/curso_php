<?php
$arr1 = [1, 2, 3];
$arr2 = [4, 5, 6];
$arr3 = ["a" => 7, "b" => 8];

$arrMerged = array_merge($arr1, $arr2, $arr3);

print_r($arrMerged);
