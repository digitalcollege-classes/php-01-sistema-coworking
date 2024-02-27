<?php

$id = $_POST['id'] ?? null;
$nome = $_POST['nome'] ?? '';
$email = $_POST['email'] ?? '';
$senha = $_POST['senha'] ?? '';

// faz o INSERT
if ($nome && $email && $senha) {
    $database = require("../src/conexao.php");
    $database->query("INSERT INTO tb_usuario (nome, email, senha) VALUES ('{$nome}', '{$email}', '{$senha}')");
}

exit(header('location: /usuarios/listar'));