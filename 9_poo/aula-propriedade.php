<?php

class Carro{
    public $rodas = 4;
    public $aro = 15;

    function ligar() : void {
        echo "Ligando... \n";
    }
}

$car = new Carro();

echo $car->aro . "\n";
echo $car->rodas . "\n";

$car->aro = 16;
echo $car->aro . "\n";
echo $car->ligar();

