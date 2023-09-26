<?php

namespace App\Entity\CMS\Hierarchy;

use App\Entity\CMS\BaseEntityType;
use App\Repository\CMS\Hierarchy\ElementRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ElementRepository::class)]
class Element extends BaseEntityType
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    public function getId(): ?int
    {
        return $this->id;
    }
}
