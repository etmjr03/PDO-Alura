<?php

use Alura\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

$caminhoBanco = __DIR__.'./banco.sqlite';
$pdo = new PDO('sqlite:' . $caminhoBanco);

// query executa o SQL e retorna o resultado em um PDOStatement e funciona como se fosse uma instacia
$sqlSelect = $pdo->query('SELECT * FROM students;');

echo '<br>fetch específico <br><pre>';
// fetch trás campos específicos
print_r($sqlSelect->fetch(PDO::FETCH_ASSOC));
echo '<br><hr>';

echo '<br>fetch coluna BD <br><pre>';
// fetchColumn trás campos de uma coluna do bd
print_r($sqlSelect->fetchColumn(1));
echo '<br><br><hr>';

echo '<br>fetchAll <br><pre>';
// fetchAll trás todos os resultados e seu padrão cria dados representados de duas formas
print_r($sqlSelect->fetchAll(PDO::FETCH_ASSOC));
echo '<br><hr>';
