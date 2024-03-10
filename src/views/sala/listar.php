<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<section class="container mt-3">
    <h2>Lista Salas</h2>
    <hr>


    <table class="table table-hover table-striped">
        <thead class="table-dark">
            <tr>
                <th>Nome</th>
                <th>Nome</th>
                <th>Capacidade</th>
                <th>Ações</th>

            </tr>
        </thead>
        <tbody>
            <?php
                $database = require("../src/conexao.php");

                $resultado = $database->query("SELECT * FROM tb_sala");

                foreach($resultado -> fetchAll() as $cada){
                    echo "
                        <tr>
                            <td>{$cada['id']}</td>
                            <td>{$cada['nome']}</td>
                            <td>{$cada['capacidade']}</td>
                            <td>
                                <a href='/salas/editar?id={$cada['id']}' class='btn btn-warning'>Editar</a>
                                <a href='/salas/excluir?id={$cada['id']}' class='btn btn-danger'>Excluir</a>
                            </td>
                        </tr>
                    ";
                }
            ?>
        </tbody>
    </table>
</section>
