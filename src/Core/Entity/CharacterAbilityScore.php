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
class CharacterAbilityScore
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
     * @var Ability
     */
    protected $ability;
    /**
     * @var int
     */
    protected $value;


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

    public function getModifier(): int
    {
        return (int)($this->getValue() - 10) / 2;
    }
}