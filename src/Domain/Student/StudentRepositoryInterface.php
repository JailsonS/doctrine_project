<?php   
namespace Src\Domain\Student;

interface StudentRepositoryInterface
{
    public function createStudent();
    public function updateStudent(int $ind, string $newName): void;
    public function list();
}