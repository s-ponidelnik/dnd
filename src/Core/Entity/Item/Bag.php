<?php
/**
 * Created by PhpStorm.
 * User: Sergey Ponidelnik
 * Date: 22/06/2018
 * Time: 15:41
 */

namespace App\Core\Entity\Item;

use App\Core\Entity\CharacterItem;
use App\Core\Entity\CharacterItemCollection;

/**
 * Class Bag
 * @package App\Core\Entity\Item
 */
class Bag extends Inventory implements BagInterface
{
    /**
     *
     */
    const TYPE = 'BAG';
    /**
     * @var float|null
     */
    protected $staticWeight = null;

    /**
     * @var float|null
     */
    protected $maxWeight = null;
    /**
     * @var CharacterItemCollection
     */
    protected $items;

    /**
     * @var float
     */
    private $weight;

    /**
     * @return float|null
     */
    public function getMaxWeight(): ?float
    {
        return $this->maxWeight;
    }

    /**
     * @param float $maxWeight
     */
    public function setMaxWeight(float $maxWeight): void
    {
        $this->maxWeight = $maxWeight;
    }

    /**
     * @return float|null
     */
    public function getStaticWeight(): ?float
    {
        return $this->staticWeight;
    }

    /**
     * @param float $staticWeight
     */
    public function setStaticWeight(float $staticWeight): void
    {
        $this->staticWeight = $staticWeight;
    }

    /**
     * @return CharacterItemCollection|null
     */
    public function getItems(): ?CharacterItemCollection
    {
        return $this->items;
    }

    /**
     * @param CharacterItemCollection $items
     */
    public function setItems(CharacterItemCollection $items): void
    {
        $this->items = $items;
    }

    /**
     * @return float
     */
    public function getWeight(): float
    {
        if ($this->staticWeight) {
            return $this->staticWeight;
        } elseif ($this->weight) {
            return $this->weight;
        } else {
            if ($this->items) {
                $this->weight = 0;
                /** @var CharacterItem $item */
                foreach ($this->items as $item) {
                    $this->weight = $this->weight + $item->getItem()->getWeight();
                }
            }
        }
        if ($this->maxWeight && $this->weight > $this->maxWeight)
            $this->weight = $this->maxWeight;
        return $this->weight;
    }
}