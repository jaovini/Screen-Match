<?php
echo "Bem-vindo(a) ao\t Screen Match ✨\n";

$nomeFilme = "Thor: Ragnarok";
$anoLancamento = 2022; 

$somaDeNotas = 0;
$quantidadeDeNotas = $argc - 1;
$somaDeNotas += $argc[1];
$somaDeNotas += $argc[2];
$somaDeNotas += $argc[3];

for ($contador = 1; $contador < $argc; $contador++) {
    $somaDeNotas += $argv[$contador];
}

$notaFilme =  $somaDeNotas / $quantidadeDeNotas;
$planoPrime = true;

$incluidoNoPlano = $planoPrime || $anoLancamento < 2020;

echo "Nome do Filme: " . $nomeFilme . "\n";
echo "Nota do Filme: $notaFilme\n";

if ($anoLancamento > 2022) {
    echo "Esse filme é um lançamento\n";
} elseif($anoLancamento > 2020 && $anoLancamento <= 2022) {
    echo "Esse filme ainda é novo\n";
} else {
    echo "Esse filme é antigo\n";
}

$genero = match ($nomeFilme) {
    "Top Gun - Maverick" => "Ação",
    "Thor: Ragnarok" => "Super-Héroi",
    "Se beber não case" => "Comédida",
    default => "Gênero desconhecido"
};

echo "O genêro do filme é: $genero\n";

echo $argc;
