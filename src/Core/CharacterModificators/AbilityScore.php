<?php
/**
 * Created by PhpStorm.
 * User: Sergey Ponidelnik
 * Date: 23/06/2018
 * Time: 10:23
 */

namespace App\Core\CharacterModificators;


use App\Core\Entity\Ability;
use App\Core\Entity\Core\ConditionCollection;

class AbilityScore
{
    /** @var Ability */
    protected $ability;
    /** @var int */
    protected $modificator;
    /** @var ConditionCollection|null */
    protected $conditions;
}