<?php

declare(strict_types=1);

use App\Http\Request;

$nome = Request::post('nome');
$capacidade = Request::post('capacidade');

if ($nome && $capacidade){
    $database = require("../src/conexao.php");

    $query = $database->prepare("
        INSERT INTO tb_sala (nome,capacidade)
        VALUES (:nome, :capacidade)
    ");

    $query->execute([
        ':nome' => $nome,
        ':capacidade' => $capacidade
    ]);
}

exit(header('location: /salas/listar'));