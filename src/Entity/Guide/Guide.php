<?php

namespace App\Entity\Guide;

use App\Entity\Guide\Item\Item;
use App\Repository\Guide\GuideRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\DiscriminatorColumn;
use Doctrine\ORM\Mapping\DiscriminatorMap;
use Doctrine\ORM\Mapping\InheritanceType;
use InvalidArgumentException;
use ReflectionClass;
use Symfony\Component\Serializer\Annotation\SerializedName;

#[ORM\Entity(repositoryClass: GuideRepository::class)]
#[InheritanceType('SINGLE_TABLE')]
#[DiscriminatorColumn(name: 'discr', type: 'string')]
#[DiscriminatorMap([
    'named_guide' => NamedGuide::class,
    'image_named_guide' => ImageNamedGuide::class,
    'blank_size_guide' => BlankSizeGuide::class
])]
abstract class Guide
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\OneToMany(mappedBy: 'guide', targetEntity: Item::class, orphanRemoval: true)]
    private Collection $items;

    public function __construct()
    {
        $this->items = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection<int, Item>
     */
    public function getItems(): Collection
    {
        return $this->items;
    }

    #[SerializedName('guideType')]
    public function getGuideType(): string
    {
        return explode('Guide', (new ReflectionClass($this))->getShortName())[0];
    }

    protected function getItemClass(): string
    {
        $guideClassShortName = $this->getGuideType();
        $itemClass = "App\\Entity\\Guide\\Item\\" . $guideClassShortName . 'Item';
        if (!class_exists($itemClass)) {
            throw new InvalidArgumentException(sprintf('Item type %s is not exist', $itemClass));
        }
        return $itemClass;
    }

    public function addItem(Item $item): static
    {
        $expectedItemClass = $this->getItemClass();

        if (!($item instanceof $expectedItemClass)) {
            throw new InvalidArgumentException(sprintf('Invalid item type. Expected %s, got %s.', $expectedItemClass, get_class($item)));
        }

        if (!$this->items->contains($item)) {
            $this->items->add($item);
            $item->setGuide($this);
        }

        return $this;
    }

    public function removeItem(Item $item): static
    {
        if ($this->items->removeElement($item)) {
            // set the owning side to null (unless already changed)
            if ($item->getGuide() === $this) {
                $item->setGuide(null);
            }
        }

        return $this;
    }
}
