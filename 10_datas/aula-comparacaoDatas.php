<?php
$date1 = new DateTime('2023-01-01');
$date2 = new DateTime('2023-12-31');

if ($date1 < $date2) {
    echo $date1->format('Y-m-d') . " é anterior a " . $date2->format('Y-m-d');
} elseif ($date1 > $date2) {
    echo $date1->format('Y-m-d') . " é posterior a " . $date2->format('Y-m-d');
} else {
    echo "Ambas as datas são iguais.";
}
