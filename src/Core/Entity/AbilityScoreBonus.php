<?php
/**
 * Created by PhpStorm.
 * User: Sergey Ponidelnik
 * Date: 22/06/2018
 * Time: 14:38
 */

namespace App\Core\Entity;
/**
 * Class AbilityScoreBonus
 * @package App\Core\Entity
 */
class AbilityScoreBonus
{
    /**
     * @var Ability
     */
    protected $ability;
    /**
     * @var int
     */
    protected $bonus;

    /**
     * @return Ability
     */
    public function getAbility(): Ability
    {
        return $this->ability;
    }

    /**
     * @return int
     */
    public function getBonus(): int
    {
        return $this->bonus;
    }
}