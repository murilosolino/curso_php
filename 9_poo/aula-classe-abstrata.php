<?php

abstract class Teste2
{

    public static function testandoClasse()
    {
        echo "Este metodo eh de uma classe abstrata \n";
    }

    abstract public function testeAbs();
}

Teste2::testandoClasse();


class Nova extends Teste2
{

    public function testeAbs()
    {
        echo "Teste metodo abstrato";
    }
}

$n = new Nova;
$n->testeAbs();
