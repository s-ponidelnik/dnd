<?php
/**
 * Created by PhpStorm.
 * User: Sergey Ponidelnik
 * Date: 26/06/2018
 * Time: 16:40
 */

namespace App\Core\Entity\World;


use App\Entity\ObjectCollection;

class RullerCollection extends ObjectCollection
{
    public function __construct(array $elements = [])
    {
        parent::__construct(Ruller::class, $elements);
    }
}