<?php
$id = $_GET['id'] ?? null;

if (is_null($id)) {
    exit(header('location: /salas/adicionar'));
}

$database = require("../src/conexao.php");
$resultado = $database->query("SELECT * FROM tb_sala WHERE id = '{$id}'")->fetch();

$nome = $resultado['nome'];
$capacidade = $resultado['capacidade'];
?>

<section class="container mt-3">
    <h1 class="display-4 text-center">Editar Sala</h1>

    <form action="/salas/atualizar" method="post">
        <div class="mb-3">
            <input type="hidden" class="form-control" id="id" name="id" value="<?= $id ?>">
        </div>

        <div class="mb-3">
            <label for="nome" class="form-label">Nome:</label>
            <input type="text" class="form-control" id="nome" name="nome" value="<?= $nome ?>" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Capacidade:</label>
            <input type="number" class="form-control" id="capacidade" name="capacidade" value="<?= $capacidade ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
</section>


