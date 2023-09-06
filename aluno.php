<?php

use Alura\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

$student = new Student(
    null,
    'Juninho',
    new \DateTimeImmutable('1999-03-04')
);

echo $student->age();
