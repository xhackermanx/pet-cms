<?php

namespace App\Entity\CMS\Guide;

use App\Entity\CMS\BaseEntity;
use App\Repository\CMS\Guide\GuideItemRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: GuideItemRepository::class)]
class GuideItem extends BaseEntity
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
