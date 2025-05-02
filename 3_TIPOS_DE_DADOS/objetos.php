<?php

 class Pessoa{
    private $name = 'Murilo';

    public function getName(){
        return $this -> name;
    }

    function FunctionName() : void {
        echo "Ola meu nome eh "  . $this-> getName();
    }
 }

 $pessoa = new Pessoa();
 $pessoa -> FunctionName();

?>