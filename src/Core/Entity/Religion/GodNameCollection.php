<?php
/**
 * Created by PhpStorm.
 * User: Sergey Ponidelnik
 * Date: 27/06/2018
 * Time: 11:08
 */

namespace App\Core\Entity\Religion;


use App\Entity\ObjectCollection;

class GodNameCollection extends ObjectCollection
{
    public function __construct(array $elements = [])
    {
        parent::__construct(GodName::class, $elements);
    }
}