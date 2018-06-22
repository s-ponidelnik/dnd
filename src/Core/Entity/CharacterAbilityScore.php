<?php
/**
 * Created by PhpStorm.
 * User: Sergey Ponidelnik
 * Date: 22/06/2018
 * Time: 13:26
 */

namespace App\Core\Entity;
/**
 * Class CharacterAbilityScore
 * @package App\Core\Entity
 */
class CharacterAbilityScore extends CharacterRel
{
    /**
     * @var Ability
     */
    protected $ability;
    /**
     * @var int
     */
    protected $value;

    public function getModifier(): int
    {
        return (int)($this->getValue() - 10) / 2;
    }

    public function getValue()
    {
        return $this->value + $this->getRaceBonus();
    }

    public function getRaceBonus(): int
    {
        if ($this->character->getRace()->getAbilityScoreBonuses())
            if ($this->character->getRace()->getAbilityScoreBonuses()->containsKey($this->id))
                return $this->character->getRace()->getAbilityScoreBonuses()->get($this->id);
        return 0;
    }
}