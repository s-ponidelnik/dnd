<?php
/**
 * Created by PhpStorm.
 * User: Sergey Ponidelnik
 * Date: 22/06/2018
 * Time: 13:34
 */

namespace App\Core\Entity\Item;
/**
 * Class Item
 * @package App\Core\Entity\Item
 */
class Item implements ItemInterface
{
    const TYPE = 'ITEM';
    /**
     * @var int
     */
    protected $id;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string|null
     */
    protected $description;
    /**
     * @var float
     */
    protected $oneItemWeight;
    /**
     * @var int
     */
    protected $count;

    /** @var Cost */
    protected $cost;

    /**
     * @var ItemModificators
     */
    protected $itemModificators;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return null|string
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return float
     */
    public function getWeight(): float
    {
        return $this->count * $this->oneItemWeight;
    }

    /**
     * @return int
     */
    public function getCount(): int
    {
        return $this->count;
    }

    /**
     * @param int $count
     */
    public function setCount(int $count): void
    {
        $this->count = $count;
    }

    /**
     * @param float $weight
     */
    public function setOneItemWeight(float $weight): void
    {
        $this->oneItemWeight = $weight;
    }
}