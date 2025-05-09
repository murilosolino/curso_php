<?php

function isPar($n) : void {
    if($n % 2 === 0){
        echo "$n eh PAR" . "<br>";
    } else{
        echo "$n eh Impar" . "<br>";
    }
}

isPar(10);
isPar(7);