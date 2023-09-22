<?php

namespace App\Entity\Store\Product\ProductPart\Field;

use App\Repository\Store\Product\ProductPart\Field\StringFieldRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: StringFieldRepository::class)]
class StringField extends Field
{
    #[ORM\Column(length: 999, nullable: true)]
    #[Assert\NotBlank]
    private ?string $strVal = null;

    public function getValue(): ?string
    {
        return $this->strVal;
    }

    public function setValue($value): static
    {
        $this->strVal = $value;

        return $this;
    }
}
