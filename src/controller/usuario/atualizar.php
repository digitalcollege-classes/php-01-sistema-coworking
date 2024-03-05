<?php

declare(strict_types=1); 

use App\Core\DatabaseConnection;
use App\Http\Request;

include "../src/Helpers/EncryptPassword.php";

$id = Request::post('id');
$nome = Request::post('nome');
$email = Request::post('email');
$senha = Request::post('senha');


// faz o UPDATE
if ($id && $nome && $email && $senha) {
    $query = DatabaseConnection::open()->prepare("UPDATE tb_usuario SET nome = :nome, email = :email, senha = :senha WHERE id = :id");
    $query->execute([
        ':id' => $id,
        ':nome' => $nome,
        ':email' => $email,
        ':senha' => $senha
    ]);

}

exit(header('location: /usuarios/listar'));
