<?php

class Humano
{

    public $nome;
    public $idade;
    public $profissao;

    function falar() {}

    function andar() {}
}

if (class_exists("Humano")) { // metodo que verifica a existencia ded uma classe
    echo "A classe existe \n";
}

if (class_exists("Cachorro")) {
    echo "A classe existe \n";
} else {
    echo "a classe nao existe \n";
}

print_r(get_class_vars("Humano")); // retorna um array com todos os atributos da classe;
print_r(get_class_methods("Humano")); // retorna um array com todos os metodos da classe;
