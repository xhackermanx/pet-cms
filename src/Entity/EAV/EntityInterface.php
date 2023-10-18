<?php

namespace App\Entity\EAV;

interface EntityInterface
{
    public function setType(EntityTypeInterface $type): static;
}