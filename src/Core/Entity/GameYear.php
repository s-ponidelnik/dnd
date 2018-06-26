<?php
/**
 * Created by PhpStorm.
 * User: Sergey Ponidelnik
 * Date: 26/06/2018
 * Time: 15:49
 */

namespace App\Core\Entity;


use App\Entity\ObjectCollection;

class GameYear extends ObjectCollection
{
    public function __construct(string $className, array $elements = [])
    {
        parent::__construct(GameYearType::class, $elements);
    }
}