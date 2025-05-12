<?php

class Carro2
{
    private $velocidade_maxima;

    function setVelocidadeMaxima($velocidadeMaxima)
    {
        $this->velocidade_maxima = $velocidadeMaxima;
    }

    function getVelocidadeMaxima()
    {
        return $this->velocidade_maxima;
    }

    function imprimeVelocidadeMaxia()
    {
        echo "A velocidade maxima do carro eh de " . $this->velocidade_maxima . " km/h \n";
    }
}

$car = new Carro2();

$car->imprimeVelocidadeMaxia();
$car->setVelocidadeMaxima(300);
$car->imprimeVelocidadeMaxia();

echo "GET VELOCIDADE MAX \n";
echo $car->getVelocidadeMaxima();
