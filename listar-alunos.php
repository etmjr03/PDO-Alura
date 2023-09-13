<?php

use Alura\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

$caminhoBanco = __DIR__.'./banco.sqlite';
$pdo = new PDO('sqlite:' . $caminhoBanco);

// query executa o SQL e retorna o resultado em um PDOStatement e funciona como se fosse uma instacia
$sqlSelect = $pdo->query('SELECT * FROM students;');
// fetchAll trás todos os resultados e seu padrão cria dados representados de duas formas
echo '<pre>';
print_r($sqlSelect->fetchAll());