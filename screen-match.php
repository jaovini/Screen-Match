<?php

echo "Bem-vindo(a) ao\t Screen Match ✨\n"


$nomeFilme = "Top Gun - Maverick";
$anoLancamento = $argv[1]; # Entrada de Dados do primeiro parametro da linha de comando
$anoLancamento = $argv[1] ?? 2022; # Operador de colecência nula, se o usuário não informar nada, ou seja o argumento for nulo, então :
$somaDeNotas = 9;
$somaDeNotas += 6;
$somaDeNotas += 8;
$somaDeNotas += 7.5;
$somaDeNotas += 5;

$notaFilme =  $somaDeNotas / 5;
$planoPrime = true;

$incluidoNoPlano = $planoPrime || $anoLancamento < 2020;

echo "Nome do Filme: " . $nomeFilme . "\n";
echo "Nota do Filme: $notaFilme\n";
