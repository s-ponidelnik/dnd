<?php
/**
 * Created by PhpStorm.
 * User: Sergey Ponidelnik
 * Date: 26/06/2018
 * Time: 14:44
 */

namespace App\Core\CharacterModificators;

use App\Entity\ObjectCollection;

class AbilityScoreCollection extends ObjectCollection
{
    public function __construct(array $elements = [])
    {
        parent::__construct(AbilityScore::class, $elements);
    }
}