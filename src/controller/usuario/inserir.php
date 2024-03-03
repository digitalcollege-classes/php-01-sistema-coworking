<?php

declare(strict_types=1);

use App\Core\DatabaseConnection;

include "../src/Http/Request.php";
include "../src/Helpers/EncryptPassword.php";

$nome = Request::post('nome');
$email = Request::post('email');
$senha = Request::post('senha');

// faz o INSERT
if ($nome && $email && $senha) {
    $query = DatabaseConnection::open()->prepare("
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