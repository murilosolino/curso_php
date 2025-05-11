<?php

class Humano
{
    // const sao declaradas sem $ porem com a palavra reservada const
    public const OLHOS = 2;
    public const BRACOS = 2;
    public const PERNAS = 2;

    function getConstOlhos()
    {
        return self::OLHOS; //self pode ser para acessar constantes como o this eh usado para acessar propriedade
    }
}

$humano = new Humano();

//acessando constantes
echo $humano::BRACOS;
