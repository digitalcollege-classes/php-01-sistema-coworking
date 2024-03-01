<?php

// forma antiga de fazer array
// $vagas = array();

$vagas = [];


$vagas[] = "Onix azul";
$vagas[] = "Fuscão Preto";
$vagas[10] = "Chevete dourado";
$vagas[] = "Celtinha branco";
$vagas[5] = "Gol quadrado";
$vagas[] = "uno com escada, da oi";
$vagas["dez"] = "Polo prata"; // dicionario
$vagas[] = "Hilux";


foreach ($vagas as $posicao => $cada) {
    // echo $posicao . " -> " . $cada . PHP_EOL;

    // echo "{$posicao} -> {$cada}" . PHP_EOL;

    echo $posicao, " -> ", $cada, PHP_EOL;
}

echo "123" , "456" , "789";

// for ($i = 0; $i <= 6; $i++) {
//     echo $vagas[$i] . PHP_EOL;
// }

// print_r($vagas);