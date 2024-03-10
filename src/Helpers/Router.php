<?php

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