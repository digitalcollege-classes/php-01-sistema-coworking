<?php
$id = $_POST['id'] ?? null;
$nome = $_POST['nome'] ?? '';
$email = $_POST['email'] ?? '';
$senha = $_POST['senha'] ?? '';

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
