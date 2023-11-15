<?php

namespace App\Entity\Catalog\Product\Field;

use App\Repository\Catalog\Product\Field\FieldRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: FieldRepository::class)]
class Field
{
    public const TYPES = [
        'boolean',
        'string',
        'integer',
        'optioned',
    ];

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $title = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    #[ORM\JoinColumn(nullable: false)]
    #[Assert\Choice(choices: Field::TYPES)]
    private string $fieldType;

    #[ORM\ManyToOne(inversedBy: 'fields')]
    #[ORM\JoinColumn(nullable: false)]
    private ?FieldGroup $fieldGroup = null;

    public function __construct(
        string $fieldType,
        string $name,
        string $title,
    )
    {
        $this->title = $title;
        $this->name = $name;
        $this->fieldType = $fieldType;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): static
    {
        $this->title = $title;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getFieldGroup(): ?FieldGroup
    {
        return $this->fieldGroup;
    }

    public function setFieldGroup(?FieldGroup $fieldGroup): static
    {
        $this->fieldGroup = $fieldGroup;

        return $this;
    }
}
