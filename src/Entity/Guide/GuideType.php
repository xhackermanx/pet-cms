<?php

namespace App\Entity\Guide;

use App\Repository\Guide\GuideTypeRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: GuideTypeRepository::class)]
//#[ORM\Cache(usage: 'READ_WRITE', region: 'default_entity_region')]
class GuideType
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
