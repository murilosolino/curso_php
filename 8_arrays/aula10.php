<?php

// verificando se um valor esta presente no array;
$arr   = ['banana', 'maca', 'batata', 'pera', 'mamao'];

  

if(in_array("batata", $arr)){ //retorna 1 se for true e nada se for false
    echo "elemento encontrado\n";    
} else{
    echo "elemento nao encontrado\n";
}

if(in_array("uva", $arr)){
    echo "elemento encontrado\n";    
} else{
    echo "elemento nao encontrado\n";
}
