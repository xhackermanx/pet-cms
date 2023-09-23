<?php

namespace App\Entity\EAV;

use Doctrine\Common\Collections\Collection;

interface EntityTypeInterface
{
    /**
     * @return int|null
     */
    public function getId(): ?int;

    /**
     * @return Collection<FieldInterface>
     */
    public function getFields(): Collection;
}