<?php

echo "Bem-vindo(a) ao screen match!" . PHP_EOL;

$nomeFilme = "Top Gun - Maverick 1";
$anoLancamento = 2022;

$notas = [];
$somaNotas = 0;
$quantidadeDeNotas = ($argc - 1);
for ($i=1; $i < $quantidadeDeNotas; $i++) { 
    $notas[] = (float)$argv[$i];
}

for ($i=0; $i < count($notas); $i++) { 
    $somaNotas += $notas[$i];
}

$notaFilme = $somaNotas / $quantidadeDeNotas;

$incluidoNoPlano = true;

echo  $nomeFilme . " " . $anoLancamento;

if($anoLancamento > 2022){
    echo 'filme lançamento'  . PHP_EOL;
} elseif ($anoLancamento > 2020 && $anoLancamento <=2022){
    echo 'Esse filme ainda é novo'  . PHP_EOL;
}else{
    echo 'Esse filme não é um lancamento'  . PHP_EOL;
}

$genero = match($nomeFilme){
    "Top Gun - Maverick" => "ação",
    "Fime 2" => "super-heroi",
    "Filme 3" => "comédia",
    default => "desconhecido"
};

echo "O genero do filme é {$genero}" . PHP_EOL; 

echo $argc;
echo "A nota do filme é {$notaFilme}" . PHP_EOL;