<?php

namespace App\Entity\EAV;

interface ValueInterface
{
    public function setEntity(EntityInterface $entity): static;

    public function setAttribute(AttributeInterface $attribute): static;
}