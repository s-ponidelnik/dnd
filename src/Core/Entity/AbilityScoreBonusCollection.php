<?php
/**
 * Created by PhpStorm.
 * User: Sergey Ponidelnik
 * Date: 22/06/2018
 * Time: 13:21
 */

namespace App\Core\Entity;


use App\Entity\ObjectCollection;

class AbilityScoreBonusCollection extends ObjectCollection
{
    public function __construct(array $elements = [])
    {
        parent::__construct(AbilityScoreBonus::class, $elements);
    }
}