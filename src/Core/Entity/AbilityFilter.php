<?php
/**
 * Created by PhpStorm.
 * User: Sergey Ponidelnik
 * Date: 22/06/2018
 * Time: 17:24
 */

namespace App\Core\Entity;


class AbilityFilter extends Filter
{
    /**
     * @var Ability
     */
    protected $ability;
    /**
     * @var int
     */
    protected $minValue;

    public function setAbility(Ability $ability): void
    {
        $this->ability = $ability;
    }

    public function getAbility(): Ability
    {
        return $this->ability;
    }

    public function setMinValue(int $minValue): void
    {
        $this->minValue = $minValue;
    }

    public function getMinValue(): int
    {
        return (int)$this->minValue;
    }

}