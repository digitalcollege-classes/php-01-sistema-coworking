<?php 

$database = include "../src/conexao.php";

$resultado = $database->query("SELECT id, nome, email FROM tb_usuario");

header('Content-Type: application/json');

echo json_encode(
    $resultado->fetchAll(PDO::FETCH_OBJ)
);