<?php

namespace App\Entity\EAV;

use phpDocumentor\Reflection\Types\Collection;

interface FieldInterface
{
    /**
     * @return int|null
     */
    public function getId(): ?int;

    /**
     * @return Collection<FieldTypeInterface>
     */
    public function getFieldType(): Collection;
}