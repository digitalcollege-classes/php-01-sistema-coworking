<?php

declare(strict_types=1); 

use App\Http\Request;

$id = Request::post('id');
$nome = Request::post('nome');
$email = Request::post('email');
$senha = Request::post('senha');


// faz o UPDATE
if ($id && $nome && $email && $senha) {
    $database = require("../src/conexao.php");

    $query = $database->prepare("UPDATE tb_usuario SET nome = :nome, email = :email, senha = :senha WHERE id = :id");
    $query->execute([
        ':id' => $id,
        ':nome' => $nome,
        ':email' => $email,
        ':senha' => $senha
    ]);

}

exit(header('location: /usuarios/listar'));
