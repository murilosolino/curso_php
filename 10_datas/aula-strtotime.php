<?php

/**
 * strtotime() - Converte uma descrição textual de data/hora para um timestamp Unix.
 *
 * Esta função aceita uma ampla variedade de formatos de data/hora em inglês e retorna
 * o timestamp Unix correspondente. Caso a conversão não seja bem-sucedida, retorna FALSE.
 *
 * @param string $time Uma string que representa a data/hora a ser convertida.
 * @param int|null $now (Opcional) Um timestamp que define a base para datas relativas.
 *
 * @return int|false O timestamp correspondente se a conversão for realizada com sucesso,
 *                   ou FALSE se a conversão falhar.
 */

$fiveDays = strtotime("5 days");

$date = date('d/m/y', $fiveDays);
echo $date . "\n";

$twoMonths = strtotime("2 months");

$date = date('d/m/y', $twoMonths);
echo $date . "\n";
