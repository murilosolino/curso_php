<?php

class Humano
{


    function falar()
    {
        echo "ola";
    }
}

$humano = new Humano;
$numero = 12345;

if (is_object($humano)) { // verifica se o parametro eh um objeto
    echo "eh um objeto \n";
} else {
    echo "nao eh um objeto \n";
}

if (is_object($numero)) {
    echo "eh um objeto \n";
} else {
    echo "nao eh um objeto \n";
}

echo get_class($humano) . "\n"; // RETORNA A CLASSE DO OBJETO

if (method_exists($humano, "falar")) { // verifica se um metodo existe para um objeto;
    echo "metodo existe \n";
} else {
    echo "metodo nao existe \n";
}

if (method_exists($humano, "AAA")) { // verifica se um metodo existe para um objeto;
    echo "metodo existe \n";
} else {
    echo "metodo nao existe \n";
}
