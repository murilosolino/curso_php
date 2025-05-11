<?php

class Humano
{
    private string $nome = "sandro";

    function getNome()
    {
        return $this->nome;
    }

    function falar()
    {
        echo $this->nome . " diz: Ola Mundo!\n";
    }
}

class Professor extends Humano
{
    private $materia  = "matematica";

    function apresentacao()
    {
        echo $this->getNome();
        echo " eh professor de " . $this->materia . "\n";
    }
}

$prof = new Professor();
$prof->falar();
$prof->apresentacao();
