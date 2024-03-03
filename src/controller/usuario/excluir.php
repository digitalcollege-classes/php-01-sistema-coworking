<?php

use App\Core\DatabaseConnection;

$id = $_GET['id'] ?? null;

// faz o DELETE
if ($id) {
    $query = DatabaseConnection::open()->prepare("DELETE FROM tb_usuario WHERE id = :id");
    $query->execute([':id' => $id]);
}

exit(header('location: /usuarios/listar'));
