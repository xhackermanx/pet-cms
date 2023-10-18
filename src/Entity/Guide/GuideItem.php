<?php

namespace App\Entity\Guide;

use App\Repository\Guide\GuideItemRepository;
use Doctrine\ORM\Mapping as ORM;
use InvalidArgumentException;

#[ORM\Entity(repositoryClass: GuideItemRepository::class)]
class GuideItem
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
