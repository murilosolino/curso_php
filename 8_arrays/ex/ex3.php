<?php
// desconstruindo um array com a funcao list
$arr = ["jaguar", 3.0, "azul", 2018, "Teto solar"];

list($marca, $motor, $cor, $ano, $observacao) = $arr;

print("Marca: {$marca} \nMotor: {$motor} \nCor: {$cor} \nAno: {$ano} \nObs: {$observacao}");