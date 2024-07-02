<?php

//saudar com base na hora

for($numero = 1; $numero < 100; $numero += 2){

    echo "$numero"; 
}
echo "\n";
$hora = (float)$argv[1];

if ($hora >= 4 && $hora <= 11.59) {
    echo "tenha um bom dia\n";
} elseif ($hora >= 12 && $hora <= 17.59) {
    echo "tenha uma boa tarde\n";
} elseif ($hora >= 18 && $hora <= 23.59 || $hora >= 0 && $hora < 4) {
    echo "tenha uma boa noite\n";
} else {
    echo "Hora inválida\n";
}
