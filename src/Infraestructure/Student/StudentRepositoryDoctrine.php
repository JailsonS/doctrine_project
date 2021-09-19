<?php  
namespace Src\Infraestructure\Student;

use Doctrine\ORM\EntityManager;
use Src\Domain\Student\Student;
use Src\Domain\Student\StudentRepositoryInterface;
use Src\Infraestructure\Database\EntityManagerFactory;

class StudentRepositoryDoctrine implements StudentRepositoryInterface
{
    /**
     * @var EntityManager
     */
    private $entityManager;

    public function __construct(EntityManagerFactory $emFactory)
    {   
        $this->entityManager = $emFactory->getEntityManager();
    }

    public function createStudent(): void
    {
        $student = new Student();
        $student->setName('Jailson Soares');

        $this->entityManager->persist($student);
        $this->entityManager->flush();
    }

    public function updateStudent(int $id, string $newName): void
    {
        $repoStudent = $this->entityManager->getRepository(Student::class);
        
        $student = $repoStudent->find($id);
        $student->setName($newName);
        
        $this->entityManager->flush();
    }

    public function list()
    {
        $repoStudent = $this->entityManager->getRepository(Student::class);
        return $repoStudent->findAll();
    }

    public function remove(int $id)
    {
        //$student = $this->entityManager->find(Student::class, $id);
        $student = $this->entityManager->getReference(Student::class, $id); // this improves performance but must be clear ID exists
        
        if(is_null($student)) {
            throw new Exception("Cannot delete a null object");
        }

        $this->entityManager->remove($student);
    }


}

