<?php
/**
 * Created by PhpStorm.
 * User: Sergey Ponidelnik
 * Date: 26/06/2018
 * Time: 15:43
 */

namespace App\Core\Entity\World;


use App\Entity\ObjectCollection;

class RegionCollection extends ObjectCollection
{
    public function __construct(string $className, array $elements = [])
    {
        parent::__construct(Region::class, $elements);
    }
}