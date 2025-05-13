<?php

foreach ($_SERVER as $key => $value) {
    echo $key . " => $value " . "<br>";
}

//acessando uma chave da variavel global $_Server;

echo "<b> {$_SERVER['SERVER_NAME']} </b> \n";

if ($_SERVER['SERVER_NAME'] == 'localhost') {
    echo "ACESSOU LOCALHOST";
}
