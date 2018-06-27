<?php
/**
 * Created by PhpStorm.
 * User: Sergey Ponidelnik
 * Date: 27/06/2018
 * Time: 11:07
 */

namespace App\Core\Entity\Religion;


use App\Entity\ObjectCollection;

class ReligionCollection extends ObjectCollection
{
    public function __construct(array $elements = [])
    {
        parent::__construct(Religion::class, $elements);
    }
}