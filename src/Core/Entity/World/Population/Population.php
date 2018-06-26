<?php
/**
 * Created by PhpStorm.
 * User: Sergey Ponidelnik
 * Date: 26/06/2018
 * Time: 15:46
 */

namespace App\Core\Entity\World\Population;


use App\Entity\ObjectCollection;

class Population extends ObjectCollection
{
    public function __construct(array $elements = [])
    {
        parent::__construct(PopulationData::class, $elements);
    }

}