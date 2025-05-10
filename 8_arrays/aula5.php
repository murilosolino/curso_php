<?php
    //recortando uma parte do array com array_slice -> semelhante ao substr()

    $arr = range(0,10);
    $slice1 = array_slice($arr, 2, 7); //recebe o array, posicao de inicio e posicao de fim.
    print_r($slice1);
