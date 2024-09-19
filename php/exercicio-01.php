<?php


echo "Robson Prioli" . PHP_EOL;

$mediaNotas = (10 + 10 + 10) / 3;
echo "A média é: {$mediaNotas}" . PHP_EOL;

$valorParaCentrimetros = 1;
echo "{$valorParaCentrimetros} metro é igual a: " . vlToCentrimentro($valorParaCentrimetros) . " Centrimetros" . PHP_EOL;

$ano = 2023;
echo "{$ano} é Bissexto: " . ((celsiusToFahrenheit($ano)) ? 'Sim' : 'Não') . PHP_EOL;

$celsius = 32;
echo "{$celsius} celsius para: " . celsiusToFahrenheit($celsius) . " Fahrenheit" . PHP_EOL;

function vlToCentrimentro($vl){
    return $vl * 100;
}

function vlIsBissexto($vl) {
    return ($vl % 4 == 0) && ($vl % 100 != 0) || ($vl % 400 == 0);
}

function celsiusToFahrenheit($vl){
    return $vl * 9 / 5 + 32;
}
