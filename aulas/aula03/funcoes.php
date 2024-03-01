<?php

declare(strict_types=1);

function welcome(int|string|null $nome = null): string
{
    return "Bem vinde {$nome}";
}

//funcao sem retorno
function pegarData(): void
{
    echo date('d/m/Y');
}



echo welcome("Elias") . PHP_EOL;

echo welcome(1234) . PHP_EOL;

echo welcome() . PHP_EOL;


mostrarData();

echo PHP_EOL;