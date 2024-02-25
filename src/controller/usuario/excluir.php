<?php

$id = $_GET['id'] ?? null;

// faz o DELETE
if ($id) {
    $database = require("../src/conexao.php");
    $database->query("DELETE FROM tb_usuario WHERE id = '{$id}' ");
}

exit(header('location: /usuarios/listar'));