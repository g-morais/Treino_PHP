<?php


echo "Bem vindo ao screen match\n";

$nomeFilme = "Top gun - Maverick";
$nomeFilme = "Fale comigo";
$nomeFilme = "Barbie";
$anoLancamento = 2022;
$quantidadeDeNotas = $argc - 1;
$somaDeNotas = 0;
$notaFilme = 0;
$planoPrime = true;

$incluidoNoPlano = 1;


$genero = match ($nomeFilme) {
   "Top gun - Maverick"  => "Aviãozinho" ,
   "Fale comigo" => "sustinho" ,
   "Barbie" => "legalzinho",
   default => "genero desconhecido",
};



for($contador =  1; $contador < $argc; $contador++){
    $somaDeNotas += $argv[$contador];
}

$notaFilme = $somaDeNotas / $quantidadeDeNotas;

echo "o genero do filme é $genero e a nota dele é $notaFilme";

$notasParaOFilme = [
    10,
    9,
    8,
    7,
    6,
    5,

];

var_dump($notasParaOFilme);