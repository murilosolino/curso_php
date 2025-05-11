<?php
require_once "aula-class.php";

$user = new User();
$user->nome = "murilo";
echo $user->exibirNome();