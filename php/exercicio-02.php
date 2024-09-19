<?php

// 1 - Escreva um programa que exiba, na tela do usuário, todos os números ímpares de 0 à 100.
for ($i=0; $i <= 100; $i++) { 
    if($i %  2 !== 0){
        echo "{$i}" . PHP_EOL;
    }
}

// 2 - Crie um programa que, a partir de altura e peso, calcule o IMC e exiba a classificação do IMC.
$pesoKG = 55;
$alturaMetros = pow(1.65, 2);
$imc = $pesoKG / $alturaMetros;
echo "Seu imc é: {$imc}" . PHP_EOL;

// 3 - Desenvolva um programa que exiba na tela uma saudação (bom dia, boa tarde ou boa noite) dependendo do horário encontrado em uma variável (inteiro representando as horas).
date_default_timezone_set('America/Sao_Paulo');
$date = date('d/m/Y H:i:s');
if($date < date('d/m/Y 12:00:00')){
    echo "Bom dia! {$date}" . PHP_EOL;
}else if($date >= date('d/m/Y 12:00:00') && $date < date('d/m/Y 18:00:00')){
    echo "Boa tarde! {$date}" . PHP_EOL;
} else{
    echo "Boa noite! {$date}" . PHP_EOL;
}