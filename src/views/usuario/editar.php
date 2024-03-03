<?php
use App\Core\DatabaseConnection;

$id = $_GET['id'] ?? null;

if (is_null($id)) {
    exit(header('location: /usuarios/adicionar'));
}

$resultado = DatabaseConnection::open()->query("SELECT * FROM tb_usuario WHERE id = '{$id}'")->fetch();

$nome = $resultado['nome'];
$email = $resultado['email'];
$senha = $resultado['senha'];
?>

<section class="container mt-3">
    <h1 class="display-4 text-center">Editar Usuário</h1>

    <form action="/usuarios/atualizar" method="post">
        <div class="mb-3">
            <input type="hidden" class="form-control" id="id" name="id" value="<?= $id ?>">
        </div>

        <div class="mb-3">
            <label for="nome" class="form-label">Nome:</label>
            <input type="text" class="form-control" id="nome" name="nome" value="<?= $nome ?>" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">E-mail:</label>
            <input type="email" class="form-control" id="email" name="email" value="<?= $email ?>" required>
        </div>

        <div class="mb-3">
            <label for="senha" class="form-label">Senha:</label>
            <input type="password" class="form-control" id="senha" name="senha" value="<?= $senha ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
</section>


