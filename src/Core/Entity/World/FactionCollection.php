<?php
/**
 * Created by PhpStorm.
 * User: Sergey Ponidelnik
 * Date: 27/06/2018
 * Time: 11:20
 */

namespace App\Core\Entity\World;


use App\Entity\ObjectCollection;

class FactionCollection extends ObjectCollection
{
    public function __construct(array $elements = [])
    {
        parent::__construct(Faction::class, $elements);
    }
}