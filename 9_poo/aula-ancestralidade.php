<?php

class Humano {}

$marcos = new Humano();

if ($marcos instanceof Humano) {
    echo "marcos eh uma instancia de humano\n";
}

class Animal {}

$animal = new Animal();
if ($animal instanceof Humano) {
    echo "animal eh uma instancia de humano\n";
} else {
    echo "animal nao eh uma instancia de humano \n";
}


class Programador extends Humano {}

$programador = new Programador;

if ($programador instanceof Humano) {
    echo "Programador eh uma instancia de humano \n";
} else {
    echo "Programador nao eh uma instancia de humano \n";
}

if ($marcos instanceof Programador) {
    echo "MARCOS eh uma instancia de PROGRAMADOR \n";
} else {
    echo "MARCOS NAO eh uma instancia de PROGRAMADOR \n";
}
