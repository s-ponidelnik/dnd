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
}