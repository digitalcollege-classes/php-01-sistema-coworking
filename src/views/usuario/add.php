

<section class="container mt-3">
    <h1 class="display-4 text-center">Novo Usuário</h1>

    <form action="/usuarios/inserir" method="post" id="formUsuario">
        <div class="mb-3">
            <input type="hidden" class="form-control" id="id" name="id">
        </div>

        <div class="mb-3">
            <label for="nome" class="form-label">Nome:</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite seu nome" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">E-mail:</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu e-mail" required>
        </div>

        <div class="mb-3">
            <label for="senha" class="form-label">Senha:</label>
            <input type="password" class="form-control" id="senha" name="senha" placeholder="Digite uma senha segura" required>
        </div>

        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
</section>


