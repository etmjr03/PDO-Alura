<?php

/*
* parâmetro 1 : string de conexão do driver 'sqlite, mysql' e seus detalhes específicos
* parâmetro 2 : $usuário
* parâmetro 3 : $senha
* também pode passar um parâmetro personalizado de informação extra
*/

// instância do PDO, pode passar 3 parâmetros
$caminhoBanco = __DIR__.'./banco.sqlite';
$pdo = new PDO('sqlite:' . $caminhoBanco);

echo 'Conectado!';

// executando uma query para criar um banco de dados 'students' no banco sqlite
$pdo->exec('CREATE TABLE students (id INTEGER PRIMARY KEY, name TEXT, birth_date TEXT);');