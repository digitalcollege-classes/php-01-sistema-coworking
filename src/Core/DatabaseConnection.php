<?php

declare(strict_types=1);

namespace App\Core;

use PDO;
use PDOException;

class DatabaseConnection
{

    public static function open(): PDO
    {
        // Essas infos precisam vir de uma fonte externa. Ex: .ENV
        $dsn = "mysql:host=setup-mysql;dbname=db_name";

        try {
            $connection = new PDO($dsn, 'user', 'password');
        } catch (PDOException $exception) {
            die("<h1>Ops! Erro ao conectar no Banco...</h1>");
        }

        return $connection;
    }
}