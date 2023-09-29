<?php

namespace App\Entity\EAV\Value;

use App\Entity\EAV\Entity\Entity;
use App\Repository\EAV\Value\ValueRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

#[ORM\Entity(repositoryClass: ValueRepository::class)]
//#[UniqueEntity(fields: ['entity', 'attribute', 'rel'], ignoreNull: 'rel')]
class Value
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'value')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Entity $entity = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEntity(): ?Entity
    {
        return $this->entity;
    }

    public function setEntity(?Entity $entity): static
    {
        $this->entity = $entity;

        return $this;
    }
}
