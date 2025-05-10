<?php

$str = "Cade o meu queijo? Ele estava aqui em cima";

$queijo = substr($str, 11, 6);
$estava = substr($str, 23, 6);

echo $queijo . " " . $estava;