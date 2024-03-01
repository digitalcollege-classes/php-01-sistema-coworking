<?php


declare(strict_types=1);

function welcome(string|null $nome = null): string
{
    return "bem vinde {$nome}";
}

echo welcome("Marcos") . PHP_EOL;
