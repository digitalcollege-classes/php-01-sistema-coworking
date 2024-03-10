<?php

declare(strict_types=1); 

use App\Http\Request;

$id = Request::post('id');
$nome = Request::post('nome');
$capacidade = Request::post('capacidade');


// faz o UPDATE
if ($id && $nome && $capacidade) {
    $database = require("../src/conexao.php");

    $query = $database->prepare("UPDATE tb_sala SET nome = :nome, capacidade = :capacidade WHERE id = :id");
    $query->execute([
        ':id' => $id,
        ':nome' => $nome,
        ':capacidade' => $capacidade
    ]);

}

exit(header('location: /salas/listar'));
