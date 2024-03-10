<section class="container mt-3">
    <h1 class="display-4 text-center">Nova Sala</h1>

    <form action="/salas/inserir" method="post" id="formSala">
        <div class="mb-3">
            <input type="hidden" class="form-control" id="id" name="id">
        </div>

        <div class="mb-3">
            <label for="nome" class="form-label">Nome:</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o nome da Sala">
        </div>

        <div class="mb-3">
            <label for="capacidade" class="form-label">Capacidade:</label>
            <input type="text" class="form-control" id="capacidade" name="capacidade" placeholder="Informe a capadidade da Sala">
        </div>

        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
</section>