<?php

class Humano
{
    public $nome = 'murilo';
    public $idade = 29;

    public function falar()
    {
        echo "Ola Mundo \n";
    }
}

$humano = new Humano();

$humano->falar();


class Programador extends Humano
{
    public $areaDeAtuacao = "backend";
}

$programador = new Programador();

$programador->falar();
echo $programador->nome . "\n";
echo $programador->areaDeAtuacao;
