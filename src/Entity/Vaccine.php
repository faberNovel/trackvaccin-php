<?php

namespace App\Entity;

use App\Repository\VaccineRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: VaccineRepository::class)]
class Vaccine
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'datetime')]
    private $dateTime;

    #[ORM\Column(type: 'string', length: 255)]
    private $type;

    #[ORM\Column(type: 'boolean')]
    private $finalInjection;

    #[ORM\Column(type: 'string', length: 255)]
    private $subjectFirstName;

    #[ORM\Column(type: 'string', length: 255)]
    private $subjectLastName;

    #[ORM\Column(type: 'integer')]
    private $subjectAge;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateTime(): ?\DateTimeInterface
    {
        return $this->dateTime;
    }

    public function setDateTime(\DateTimeInterface $dateTime): self
    {
        $this->dateTime = $dateTime;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getFinalInjection(): ?bool
    {
        return $this->finalInjection;
    }

    public function setFinalInjection(bool $finalInjection): self
    {
        $this->finalInjection = $finalInjection;

        return $this;
    }

    public function getSubjectFirstName(): ?string
    {
        return $this->subjectFirstName;
    }

    public function setSubjectFirstName(string $subjectFirstName): self
    {
        $this->subjectFirstName = $subjectFirstName;

        return $this;
    }

    public function getSubjectLastName(): ?string
    {
        return $this->subjectLastName;
    }

    public function setSubjectLastName(string $subjectLastName): self
    {
        $this->subjectLastName = $subjectLastName;

        return $this;
    }

    public function getSubjectAge(): ?int
    {
        return $this->subjectAge;
    }

    public function setSubjectAge(int $subjectAge): self
    {
        $this->subjectAge = $subjectAge;

        return $this;
    }
}
