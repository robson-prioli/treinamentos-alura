<?php

// 1 - Escreva um programa em PHP que remova os elementos duplicados de um array fornecido como entrada e exiba o array resultante. Por exemplo,
// se o array for [1, 2, 2, 3, 4, 4, 5], o programa deve exibir [1, 2, 3, 4, 5].

$array = [];
$duplicados = [1, 2, 2, 3, 4, 4, 5];
foreach($duplicados as $item):
    if(!in_array($item, $array)):
        $array []=  $item;
    endif;
endforeach;

$semDuplicatas = array_unique($duplicados);


// 2 - Percorra um array de notas (cada uma de 0 a 10) e exiba a nota do aluno em questão com a informação se o aluno foi aprovado ou não.
// Se a nota for maior do que 6, o aluno foi aprovado. Caso contrário, foi reprovado.

$notas = [0, 10, 8, 6, 5, 7, 9, 2, 3];
foreach($notas as $nota):
    if($nota > 6):
        echo "Aluno aprovado, nota: {$nota}".PHP_EOL;
    endif;
endforeach;


// 3 - Defina um array associativo que representa uma conta bancária (com titular e saldo) e exiba suas informações na tela.
$contaBancaria = [
    'titular' => 'Robson Prioli',
    'Saldo' => 200
];

echo "O titular da conta é: {$contaBancaria['titular']}, e seu saldo é de: {$contaBancaria['Saldo']}." . PHP_EOL;


// 4 - Crie um array contendo nomes de familiares seus e após sua criação adicione mais elementos ao array.
$familiares = ['Alice', 'Bob', 'Charlie'];
$familiares[] = 'Davi';