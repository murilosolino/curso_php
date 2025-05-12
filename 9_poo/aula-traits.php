<?php

trait Objeto
{

    public $atributo = "teste de atributo";

    public function teste()
    {
        echo "Este eh um teste de trait \n";
    }
}

trait Teste
{
    public function metodoDeTeste()
    {
        echo "Adicionado mais uma Trait em Central";
    }
}

class Central
{
    use Objeto;
    use Teste;

    public function alterarAtributo($novoValor)
    {
        $this->atributo = $novoValor;
    }
}

$central = new Central();

$central->teste();
echo $central->atributo . "\n";
$central->alterarAtributo("este eh o novo valor de atributo da trait");
echo $central->atributo . "\n";
$central->metodoDeTeste();
