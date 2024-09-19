<?php

$conta = ['titular' => 'Robson', 'saldo' => 2_000];

$exitLoop = false;
while(!$exitLoop):

    echo '*******' . PHP_EOL;
    echo "Titular: {$conta['titular']}" . PHP_EOL;
    echo "Saldo: R$ {$conta['saldo']}" . PHP_EOL;
    echo '*******' . PHP_EOL;

    echo "1. Consultar saldo atual" . PHP_EOL;
    echo "2. Sacar valor" . PHP_EOL;
    echo "3. Depositar valor" . PHP_EOL;
    echo "4. Sair" . PHP_EOL;

    $option = (int) fgets(STDIN);
    switch($option):
        case 1:
            echo "Seu saldo é de {$conta['saldo']}" . PHP_EOL;
            break;
        case 2:
            echo "Digite o valor a ser sacado:" . PHP_EOL;

            $vlSaque = (float) fgets(STDIN);
            if($vlSaque > $conta['saldo']){
                echo "Saldo insuficiente." . PHP_EOL;
            } else {
                $conta['saldo'] -= $vlSaque;
                echo "Saque de {$vlSaque} " . PHP_EOL;
            }
            break;
        case 3:
            echo "Digite o valor a ser deposito:" . PHP_EOL;

            $vlDeposito = (float) fgets(STDIN);
            $conta['saldo'] += $vlDeposito;
            break;
        case 4:
            echo "Até a proxima" . PHP_EOL;
            $exitLoop = true;
            break;
    endswitch;
endwhile;