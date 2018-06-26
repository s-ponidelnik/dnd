<?php
/**
 * Created by PhpStorm.
 * User: Sergey Ponidelnik
 * Date: 26/06/2018
 * Time: 14:44
 */

namespace App\Core\Entity\Core;

use App\Entity\ObjectCollection;

class ConditionCollection extends ObjectCollection
{
    public function __construct(array $elements = [])
    {
        parent::__construct(Condition::class, $elements);
    }
}