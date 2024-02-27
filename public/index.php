<?php

ini_set('display_errors', 1);

$route = explode('?', $_SERVER['REQUEST_URI'])[0];

function render($view)
{
    include "../src/views/_partials/header.php";

    //if (usuario logado)
    include "../src/views/_partials/nav.php";
    //endif
    
    include "../src/views/{$view}.php";
    
    include "../src/views/_partials/footer.php";
}

function execute($controller)
{
    include "../src/controller/{$controller}.php";
}

match ($route) {
    '/' => render('home'),
    '/usuarios/listar' => render("usuario/listar"),
    '/usuarios/adicionar' => render("usuario/add"),
    '/usuarios/editar' => render("usuario/editar"),
    '/usuarios/inserir' => execute("usuario/inserir"),
    '/usuarios/atualizar' => execute("usuario/atualizar"),
    '/usuarios/excluir' => execute("usuario/excluir"),
    '/salas-disponiveis' =>render ("usuario/salas"),
    default => render("erros/not_found"),
};