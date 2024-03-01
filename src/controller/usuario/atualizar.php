<?php

declare(strict_types=1); 

include "../src/Http/Request.php";
include "../src/Helpers/EncryptPassword.php";

$id = Request::post('id');
$nome = Request::post('nome');
$email = Request::post('email');
$senha = Request::post('senha');


// faz o UPDATE
if ($id && $nome && $email && $senha) {
    $database = require("../src/conexao.php");

    $query = $database->prepare("
    UPDATE tb_usuario 
    SET nome = :nome, email = :email, senha = :senha 
    WHERE id = :id
");

$query->execute([
    ':id' =>$id,
    ':nome' => $nome,
    ':email' => $email,
    ':senha' => encryptPassword($senha),
]);
}

exit(header('location: /usuarios/listar'));