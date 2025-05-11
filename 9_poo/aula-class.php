<?php

class User{
    public string $nome;

    public function exibirNome(){
        return "O nome do usuario eh: ". $this->nome; 
    }
}
