<?php

    echo 5;
    echo "<br>";
    echo 5 + 7;

    echo "<br>";
    echo -12;

    echo "<br>";
    echo 5 - 7, "<br>";

    //checar se o valor eh inteiro
    $n = 10;
    
    if(is_int($n)){
        echo $n, " eh um inteiro! <br>";
    }

    $s = "gsahs";

    if (!is_int($s)){
        echo $s, " Nao eh um inteiro <br>";
    }
    

?>