<?php   

use Src\Infraestructure\Database\EntityManagerFactory;
use Src\Infraestructure\Student\StudentRepositoryDoctrine;

require_once __DIR__ . '/vendor/autoload.php';

$emFactory = new EntityManagerFactory();
$studentRepository = new StudentRepositoryDoctrine($emFactory);
//$studentRepository->createStudent();


$studentRepository->updateStudent(5, 'Jailson Soares de Souza Filho');

/** $var Student[] $studentList */
$studentList = $studentRepository->list();

foreach($studentList as $one) {
    echo "ID: {$one->getId()}\n{$one->getName()}";
}