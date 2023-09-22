<?php

namespace App\Entity\Store\Product\ProductPart\Field;

use App\Repository\Store\Product\ProductPart\Field\OptionedFieldRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: OptionedFieldRepository::class)]
class OptionedField extends Field
{
    public function getValue(): array
    {
        return [];
    }

    public function setValue(mixed $value): FieldInterface
    {
        return $this;
    }
}
