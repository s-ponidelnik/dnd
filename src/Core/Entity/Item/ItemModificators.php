<?php
/**
 * Created by PhpStorm.
 * User: Sergey Ponidelnik
 * Date: 26/06/2018
 * Time: 14:58
 */

namespace App\Core\Entity\Item;


use App\Core\CharacterModificators\AbilityScoreCollection;
use App\Core\CharacterModificators\SkillCollection;

class ItemModificators
{
    /** @var AbilityScoreCollection */
    protected $abilityModificators;

    /** @var SkillCollection */
    protected $skillModificators;

    /** @var ItemCast */
    protected $itemCast;

}