<?php   
namespace Src\Domain\Student;

use Doctrine\ORM\Mapping\Entity;
use Src\Domain\Student\Cellphone;

/** @Entity */
class Student 
{
    /**
     * @Id
     * @GeneratedValue
     * @Column(type="integer", nullable="false")
     */
    private $id;

    /** @Column(type="string", name="name") */
    private string $name;

    /**
     * @OneToMany(targetEntity="Cellphone", mappedBy="student")
     */
    private $cellphones;

    public function __construct()
    {
        $this->cellphones = new ArrayCollection();
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function addCellphone(Cellphone $phone)
    {
        $this->cellphones->add($phone);
        $phone->setStudent($this);
        return $this;
    }

    public function getCellphones(): ArrayCollection
    {
        return $this->cellphones;
    }
}