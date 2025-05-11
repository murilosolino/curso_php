<?php

class Pessoa{
    public $nome;
    public $idade;

    function andar($metros){
        echo $this->nome . " andou {$metros} metros";
    }
}

$pessoa = new Pessoa();
$pessoa->nome = 'Murilo';
$pessoa->idade = 21;
$pessoa->andar(20);