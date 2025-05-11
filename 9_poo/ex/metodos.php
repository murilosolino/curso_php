<?php

class Cachorro{

    function latir(){
        return "au au au! \n";
    }

    function andar(){
        return "andando... \n";
    }

}

$dog = new Cachorro();
echo $dog->andar();
echo $dog->latir();