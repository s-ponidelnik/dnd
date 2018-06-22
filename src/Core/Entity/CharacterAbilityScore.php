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
    protected $score;
    /**
     * @var int
     */
    protected $modifier;
}