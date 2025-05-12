<?php

class Gato
{
    private $nome;
    private $cor;
    private $idade;
    private $sexo;

    public function __construct($nome, $cor, $idade, $sexo)
    {
        $this->nome = $nome;
        $this->cor = $cor;
        $this->idade = $idade;
        $this->sexo = $sexo;
    }


    public function __toString()
    {
        return "Nome: " . $this->nome . ", Cor: " . $this->cor . ", Idade: " . $this->idade . ", Sexo: " . $this->sexo;
    }
}

$gato = new Gato("Gato", "preto", 5, "M");
echo $gato->__toString();
