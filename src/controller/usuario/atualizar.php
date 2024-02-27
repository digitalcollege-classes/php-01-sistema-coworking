<?php
$id = $_POST['id'] ?? null;
$nome = $_POST['nome'] ?? '';
$email = $_POST['email'] ?? '';
$senha = $_POST['senha'] ?? '';

// faz o UPDATE
if ($id && $nome && $email && $senha) {
    $database = require("../src/conexao.php");
    $database->query("UPDATE tb_usuario SET nome = '{$nome}', email = '{$email}', senha = '{$senha}' WHERE id = '{$id}'");
}

exit(header('location: /usuarios/listar'));