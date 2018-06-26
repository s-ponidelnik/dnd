<?php
/**
 * Created by PhpStorm.
 * User: Sergey Ponidelnik
 * Date: 26/06/2018
 * Time: 15:40
 */

namespace App\Core\Entity\World;


use App\Entity\ObjectCollection;

class GeoObjectCollection extends ObjectCollection
{
    public function __construct(string $className, array $elements = [])
    {
        parent::__construct(GeoObject::class, $elements);
    }
}