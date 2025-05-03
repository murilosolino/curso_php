<?php
// filepath: c:\xampp\htdocs\curso_php\4_VARIAVEIS\escopoStatic.php

function incrementaEstatico() {
    static $contador = 0; // Variável estática
    $contador++;
    echo "Valor do contador: " . $contador . "<br>";
}

incrementaEstatico(); // Valor do contador: 1
incrementaEstatico(); // Valor do contador: 2
incrementaEstatico(); // Valor do contador: 3

function incrementaNormal() {
    $contador = 0; // Variável normal
    $contador++;
    echo "Valor do contador (normal): " . $contador . "<br>";
}

incrementaNormal(); // Valor do contador (normal): 1
incrementaNormal(); // Valor do contador (normal): 1
incrementaNormal(); // Valor do contador (normal): 1

?>