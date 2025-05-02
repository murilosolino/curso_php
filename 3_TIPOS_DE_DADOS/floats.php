<?php 

$a = 1;
echo $a , "<br>";

$b = 15.32 + 1.32;
$c = 23.20;
$d = -10.0;

echo $b, "<br>", $c, "<br>", $d, "<br>";

if(is_float($b)){
    echo $b, " is float <br>";
}

if(!is_float($a)){
    echo $a, " is not float <br>";
}

?>

