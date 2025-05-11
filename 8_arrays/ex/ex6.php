<?php

$ranking = [
    "Alice" => 100,
    "Bob" => 30,
    "Charlie" => 80,
    "Dave" => 50,
    "Eve" => 20
];


arsort($ranking);

$i = 1;
foreach ($ranking as $key => $value) {
    echo "#{$i} $key : $value \n";
    $i++;
}
?>