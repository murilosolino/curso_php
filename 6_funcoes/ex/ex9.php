<?php

// funcoes para retornar dados sobre argumentos de outras funcoes
function soma($a, $b){

    echo "argumentos \n";
    print_r(func_get_args()); //capptura os argumentos da funcao e imprime eles;

    echo "numeros de argumentos \n";
    echo func_num_args();

    return $a + $b;
}

$soma = soma(2,3);
echo "\n Resultado: $soma";