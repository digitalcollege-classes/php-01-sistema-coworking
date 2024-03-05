<?php

declare(strict_types=1);

use App\Core\DatabaseConnection;
use App\Http\Request;

$id = Request::get('id');

// faz o DELETE
if ($id) {
    $query = DatabaseConnection::open()->prepare("DELETE FROM tb_usuario WHERE id = :id");
    $query->execute([':id' => $id]);
}

exit(header('location: /usuarios/listar'));
