<?php
/**
 * Created by PhpStorm.
 * User: Sergey Ponidelnik
 * Date: 22/06/2018
 * Time: 14:52
 */

namespace App\Core\Entity;


class SkillBonus
{
    /** @var int */
    protected $id;
    /** @var bool */
    protected $proficiency;
    /** @var bool */
    protected $expertise;
    /** @var int */
    protected $value;
}