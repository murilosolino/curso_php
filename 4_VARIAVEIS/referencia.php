<?php 

    $x = 2;
    $y =& $x;
    echo $x . "<br>" . $y . "<br>";

    $x = 10;
    echo $x . "<br>" . $y . "<br>";

    $y = 15;
    echo $x . "<br>" . $y . "<br>";

?>