<?php  
namespace Src\Domain\Student;

use Doctrine\ORM\Mapping\Entity;

/**
 * @Entity
 */
class Cellphone 
{
    /**
     * @Id
     * @GeneratedValue
     * @Column(type="integer")
     */
    private int $id;

    /**Column(type="string", length=12) */
    private string $number;

    /**
     * ManyToOne(targetEntity="Student")
     */
    private Student $student;

    public function getId(): int
    {
        return $this->id;
    }
    
    public function setId($id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getNumber(): string
    {
        return $this->number;
    }

    public function setNumber($number): self
    {
        $this->number = $number;

        return $this;
    }


    public function getStudent(): Student
    {
        return $this->student;
    }

    public function setStudent(Student $student): self
    {
        $this->student = $student;
        return $this;
    }
}