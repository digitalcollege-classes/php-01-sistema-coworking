<?php

$config_db = [
    'server' => 'localhost',
    'user' => 'root',
    'password' => '123456',
    'db_name' => 'db_estacionamento'
];

$connections = [
    'mysql' => $config_db,

    'postgresql' => [
        'server' => 'localhost',
        'user' => 'root',
        'password' => '123456',
        'db_name' => 'db_estacionamento'
    ],
];


echo $connections['mysql']['db_name'];