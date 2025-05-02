<?php 

$a = [1,2,3];

//imprime um array
print_r($a);

echo "<br>";

$arr = ["Murilo", 1004, true, 10.10];

print_r($arr);

echo "<br>";

//imprime a primeira posicao do array
echo $a[0];

echo "<br>";
//Array associativo (Array com chave e valor)
$array = ['nome' => "Oliveira", 'idade' => 21];

print_r($array);
echo "<br>";
echo $array['nome'] . "<br>";

$car = ['marca' => "FIAT", 'ano' => 2025, 'cor' => "Vermelho"];
echo $car['marca'] . "<br>" . $car['ano'] . "<br>";

$pessoa = [
    'nome' => "Andrea",
    'idade' => 50
];

$pessoa2 = [
    'nome' => "Mariana",
    'idade' => 10
];

if($pessoa['idade'] >= 18){
    echo $pessoa['nome'] . " eh maior de idade" . "<br>";
}


if($pessoa2['idade'] < 18){
    echo $pessoa2['nome'] . " eh menor de idade" . "<br>";
}
?>