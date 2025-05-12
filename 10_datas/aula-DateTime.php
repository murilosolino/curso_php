<?php

// Cria um objeto DateTime com a data e hora atual.
$date = new DateTime();

// Imprime detalhes do objeto DateTime, como data e fuso horário.
print_r($date);

// Exibe a data formatada como dia/mês/ano (dois dígitos para dia e mês, dois para o ano).
echo $date->format('d/m/y') . "\n";

// Exibe a data com dia e mês abreviados e o ano completo.
echo $date->format('D - M - Y') . "\n";

// Adiciona 5 dias à data atual.
$date->modify('+5 days');
// Exibe a data modificada formatada como dia/mês/ano.
echo $date->format('d/m/y') . "\n";

// Subtrai 2 anos da data atual.
$date->modify('-2 years');
// Exibe a data modificada formatada.
echo $date->format('d/m/y') . "\n";

// ------------------------------------------------------------------
// Define uma data específica: 1º de dezembro de 1999.
$date->setDate(1999, 12, 01);
// ------------------------------------------------------------------

// Define o horário do objeto DateTime para 05 horas, 12 minutos e 10 segundos.
$date->setTime(05, 12, 10);

// Imprime novamente os detalhes do objeto DateTime, agora com data e hora modificadas.
print_r($date);

// Cria um novo objeto DateTime com uma data específica (12 de fevereiro de 2025).
$date2 = new DateTime('2025-02-12');

// Exibe a data e hora do objeto $date formatadas conforme o especificado.
echo $date->format('d/m/Y H:i:s') . "\n";

// Calcula a diferença entre as datas dos objetos $date e $date2.
$diff = $date->diff($date2);
// Imprime a diferença entre as duas datas.
print_r($diff);
$date->setTime(05, 12, 10);
print_r($date);


// Criando uma data específica
$date2 = new DateTime('2025-02-12');

// Exibindo a data formatada
echo $date->format('d/m/Y H:i:s') . "\n";
$diff = $date->diff($date2);
print_r($diff);
