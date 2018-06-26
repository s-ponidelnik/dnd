<?php
/**
 * Created by PhpStorm.
 * User: Sergey Ponidelnik
 * Date: 26/06/2018
 * Time: 14:49
 */

namespace App\Core\Entity\Item;


use App\Entity\ObjectCollection;

class ArmorPropertyCollection extends ObjectCollection
{
    public function __construct(array $elements = [])
    {
        parent::__construct(ArmorProperty::class, $elements);
    }
}