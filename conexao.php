<?php

/*
* parâmetro 1 : string de conexão do driver 'sqlite, mysql' e seus detalhes específicos
* parâmetro 2 : $usuário
* parâmetro 3 : $senha
* também pode passar um parâmetro personalizado de informação extra
*/

// instaância do PDO, pode passar 3 parâmetros
$pdo = new PDO('sqlite:banco.sqlite');

echo 'Conectado!';