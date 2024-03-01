<?php

declare(strict_types=1); 

include "../src/Http/Request.php";

$nome = Request::post('nome');
$email = Request::post('email');
$senha = Request::post('senha');

function encryptPassword(string $password): string
{
    return password_hash($password, PASSWORD_BCRYPT);
} 

// faz o INSERT
if ($nome && $email && $senha) {
    $database = require("../src/conexao.php");

    $query = $database->prepare("
        INSERT INTO tb_usuario (nome, email, senha) 
        VALUES (:nome, :email, :senha)
    ");

    //$query->bindParam(':nome', $nome);

    $query->execute([
        ':nome' => $nome,
        ':email' => $email,
        ':senha' => encryptPassword($senha),
    ]);
}

exit(header('location: /usuarios/listar'));