<?php

//parametros default
 function teste ($a = "teste"){
    echo "O valor de a eh: $a \n";
 }

 function teste2($a, $b = "B"){
    echo "Imprimindo $a como 'a' e $b como 'b'\n";
 }

 teste();
 teste2("A");

 function defineCorCarro($cor = "vermelho"){
    return $cor;
 }

 $corCarro = defineCorCarro();
 echo $corCarro;

?>