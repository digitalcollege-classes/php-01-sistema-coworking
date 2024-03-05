<?php
    use App\Core\DatabaseConnection;
?>

<section class="container mt-3">
    <h2>Lista Usuários</h2>
    <hr>


    <table class="table table-hover table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $resultado = DatabaseConnection::open()->query("SELECT * FROM tb_usuario");

                foreach($resultado->fetchAll() as $cada) {
                    echo "
                        <tr>
                            <td>{$cada['id']}</td>
                            <td>{$cada['nome']}</td>
                            <td>{$cada['email']}</td>
                            <td>
                                <a href='/usuarios/editar?id={$cada['id']}' class='btn btn-warning'>Editar</a>
                                <a href='/usuarios/excluir?id={$cada['id']}' class='btn btn-danger'>Excluir</a>
                            </td>
                        </tr>
                    ";
                }

            ?>
        </tbody>
    </table>
</section>