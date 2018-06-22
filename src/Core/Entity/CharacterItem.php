<?php
/**
 * Created by PhpStorm.
 * User: Sergey Ponidelnik
 * Date: 22/06/2018
 * Time: 15:20
 */

namespace App\Core\Entity;

use App\Core\Entity\Item\Item;

/**
 * Class CharacterItem
 * @package App\Core\Entity
 */
class CharacterItem extends CharacterRel
{
    /**
     * @var
     */
    protected $item;

    /**
     * @return Item
     */
    public function getItem(): Item
    {
        return $this->item;
    }

    /**
     * @param Item $item
     */
    public function setItem(Item $item): void
    {
        $this->item = $item;
    }
}