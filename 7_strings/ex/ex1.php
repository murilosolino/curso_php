<?php 

$arr = [
    'porta' => 100,
    'macaneta' => 5,
    'motor' => 200,
    'retrovisor' => 8,
];

function itemsCarro($arr){
    $itemsCaros = [];
   foreach($arr as $item => $preco){
    if($preco > 10){
        array_push($itemsCaros, $item);
    }
   }
   return $itemsCaros;
}
$result = itemsCarro($arr);
print_r($result);