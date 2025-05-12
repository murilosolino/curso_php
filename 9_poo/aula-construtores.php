<?php

class Carro
{

    private $portas;
    private $motor;
    private $teto_solar;

    public function __construct($portas, $motor, $teto_solar)
    {
        $this->portas = $portas;
        $this->motor = $motor;
        $this->teto_solar = $teto_solar;
    }

    public function __toString()
    {
        return "Portas: {$this->portas}, Motor: {$this->motor}, Teto solar: " . ($this->teto_solar ? 'Sim' : 'Não');
    }
}

$carro = new Carro(2, 8.0, false);
echo $carro->__toString();
