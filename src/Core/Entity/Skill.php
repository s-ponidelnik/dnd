<?php
/**
 * Created by PhpStorm.
 * User: Sergey Ponidelnik
 * Date: 22/06/2018
 * Time: 13:15
 */

namespace App\Core\Entity;
use App\Core\Entity\Core\Description;

/**
 * Class Skill
 * @package App\Core\Entity
 */
class Skill
{
    /**
     * @var int
     */
    protected $id;
    /**
     * @var Ability
     */
    protected $ability;

    /**
     * @var string
     */
    protected $name;
    /**
     * @var Description
     */
    protected $description;

    public function getAbility(): Ability
    {
        return $this->ability;
    }
}