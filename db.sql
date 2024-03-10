USE db_name;

CREATE TABLE IF NOT EXISTS tb_usuario (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL
);

INSERT INTO tb_usuario 
    (nome, email, senha)
VALUES
    ('Chiquim', 'chiquim@email.com', '123');

INSERT INTO tb_usuario 
    (nome, email, senha)
VALUES
    ('Zefina', 'zefina@email.com', '456');

CREATE TABLE IF NOT EXISTS tb_sala (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    capacidade VARCHAR(4) NOT NULL
);

INSERT INTO tb_sala 
    (nome, capacidade)
VALUES
    ('Larry Page', '30');

INSERT INTO tb_sala 
    (nome, capacidade)
VALUES
    ('Stive Jobs', '25');

INSERT INTO tb_sala 
    (nome, capacidade)
VALUES
    ('AuditorioX', '350');
