<?php
/**
 * Created by PhpStorm.
 * User: Sergey Ponidelnik
 * Date: 27/06/2018
 * Time: 11:19
 */

namespace App\Core\Entity\Religion;


use App\Entity\ObjectCollection;

class TempleCollection extends ObjectCollection
{
    public function __construct(array $elements = [])
    {
        parent::__construct(Temple::class, $elements);
    }
}