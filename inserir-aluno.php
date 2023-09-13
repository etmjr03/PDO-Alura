<?php

use Alura\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

$caminhoBanco = __DIR__.'./banco.sqlite';
$pdo = new PDO('sqlite:' . $caminhoBanco);

// instanciando um aluno com a classe Student
$student = new Student(null, 'juninho2', new DateTimeImmutable('2000-02-01'));

// query de userir um aluno no banco de dados
$sqlInsert = "INSERT INTO students (name, birth_date) VALUES (
    '{$student->name()}', 
    '{$student->birthdate()->format('Y-m-d')}')";

// executando a query para inserir um aluno no banco de dados
//var_dump($pdo->exec($sqlInsert));