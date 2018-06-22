<?php
/**
 * Created by PhpStorm.
 * User: Sergey Ponidelnik
 * Date: 22/06/2018
 * Time: 14:33
 */

namespace App\Core\Entity;
/**
 * Class ProficiencyBonus
 * @package App\Core\Entity
 */
class ProficiencyBonus
{
    /**
     * @var int
     */
    protected $level;
    /**
     * @var int
     */
    protected $value;

    public function getLevel():int{
        return $this->level;
    }
    public function getValue():int{
        return $this->value;
    }
}