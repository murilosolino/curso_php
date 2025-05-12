<?php

/**
 * mktime - Gera um timestamp Unix para uma data/hora específica.
 *
 * Esta função cria um timestamp Unix com base nos parâmetros fornecidos que representam
 * a hora, minuto, segundo, mês, dia e ano, levando em consideração o fuso horário local
 * configurado no servidor.
 *
 * Parâmetros:
 *   int $hour   [opcional] - A hora, podendo ultrapassar os limites (ex.: 25 fará a contagem automática do dia seguinte).
 *   int $minute [opcional] - O minuto.
 *   int $second [opcional] - O segundo.
 *   int $month  [opcional] - O mês (1 até 12).
 *   int $day    [opcional] - O dia do mês.
 *   int $year   [opcional] - O ano (geralmente em 4 dígitos).
 *
 * Retorno:
 *   int|false - Retorna o timestamp Unix correspondente à data/hora especificada ou FALSE se a data for inválida.
 *
 * Notas:
 *   - Se nenhum parâmetro for informado, a função utilizará a data/hora atual.
 *   - Valores fora dos intervalos convencionais serão normalizados automaticamente.
 */

$dataEspecial = mktime(19, 30, 04, 05, 12, 2019);

$date = date('d/m/y', $dataEspecial);
echo $date;
