<?php
/**
 * Created by PhpStorm.
 * User: Sergey Ponidelnik
 * Date: 22/06/2018
 * Time: 13:32
 */

namespace App\Core\Entity;
/**
 * Class CharacterSkill
 * @package App\Core\Entity
 */
class CharacterSkill
{
    /**
     * @var int
     */
    protected $id;
    /**
     * @var Character
     */
    protected $character;
    /**
     * @var Skill
     */
    protected $skill;
    /**
     * @var bool
     */
    protected $proficiency;
    /**
     * @var bool
     */
    protected $expertise;

    public function isExpertise(): bool
    {
        return $this->expertise;
    }

    public function isProfiency(): bool
    {
        return $this->proficiency;
    }

    public function getValue(): int
    {
        $value = $this->getCharacterAbility()->getModifier();
        if ($this->isProfiency()) {
            $value = $value + $this->character->getProficiencyBonus();
            if ($this->isExpertise())
                $value = $value + $this->character->getProficiencyBonus();
        }
        return $value;
    }

    public function getCharacterAbility(): CharacterAbilityScore
    {
        return $this->character->getAbilities()->get($this->skill->getAbility()->getId());
    }
}