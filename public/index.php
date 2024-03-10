<?php

ini_set('display_errors', 1);

include_once "../vendor/autoload.php";
require "../src/Helpers/Router.php";

$route = explode('?', $_SERVER['REQUEST_URI'])[0];

match ($route) {
    '/' => render('home'),
    '/usuarios/listar' => render("usuario/listar"),
    '/usuarios/adicionar' => render("usuario/add"),
    '/usuarios/editar' => render("usuario/editar"),
    '/usuarios/inserir' => execute("usuario/inserir"),
    '/usuarios/atualizar' => execute("usuario/atualizar"),
    '/usuarios/excluir' => execute("usuario/excluir"),

    '/salas/adicionar' => render("sala/add"),
    '/salas/listar' => render("sala/listar"),
    '/salas/inserir' => execute("sala/inserir"),

    default => render("erros/not_found"),
};
