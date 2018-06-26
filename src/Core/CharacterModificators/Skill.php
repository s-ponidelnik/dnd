<?php
/**
 * Created by PhpStorm.
 * User: Sergey Ponidelnik
 * Date: 23/06/2018
 * Time: 10:23
 */

namespace App\Core\CharacterModificators;

use App\Core\Entity\Core\ConditionCollection;

class Skill
{
    /** @var Skill */
    protected $skill;
    /** @var int */
    protected $modificator;
    /** @var bool */
    protected $proficiency;
    /** @var bool */
    protected $expertise;
    /** @var ConditionCollection|null */
    protected $conditions;
}