# SETUP PHP

Uma base de aplicação limpa (sem frameworks), para estudos em PHP Orientado a objetos.

Essa estrutura já está dockerizada, então basta ter o docker compose rodando em seu computador que é pra dar tudo certo.

## Tecnologias

- PHP 8.3
- MySQL
- nginx

## Como usar

Primeiro basta clonar o repositório

`git clone https://github.com/digitalcollege-classes/php-01-sistema-coworking`

## Para instalar

Com o docker já funcionando no seu computador, execute o comando abaixo:

`docker-compose up -d`

depois de aguardar os containeres subirem, acesse:

http://localhost


## Para acessar o banco de dados

Para acessar a maquina onde o MySQL ta instalado:

`docker-compose exec mysql bash`

Para acessar o command line do MySQL:

`mysql -u user -p`

<<<<<<< HEAD
o usuario é a palavra user, e a senha é exatamente password
>>>>>>> 4a569c6 (Atualizando readme)
=======
o usuario é a palavra user, e a senha é exatamente password
>>>>>>> 4a569c6 (Atualizando readme)
